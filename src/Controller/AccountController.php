<?php

namespace App\Controller;

use App\Entity\User;
use App\Repository\UserRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Validator\Validator\ValidatorInterface;

class AccountController extends AbstractController
{
    #[Route('/mot-de-passe-perdu', name: 'app_forgot_password')]
    public function forgotPassword(Request $request, UserRepository $userRepository): Response
    {
        if ($request->isMethod('POST')) {
            // Rate limiting for password reset
            $session = $request->getSession();
            $lastAttempt = $session->get('last_password_reset_attempt', 0);
            $attemptCount = $session->get('password_reset_attempts', 0);
            
            if (time() - $lastAttempt < 60) { // 1 minute between attempts
                $this->addFlash('error', 'Veuillez attendre avant de faire une nouvelle demande.');
                return $this->render('account/forgot_password.html.twig');
            }
            
            if ($attemptCount >= 3 && time() - $lastAttempt < 3600) { // Max 3 attempts per hour
                $this->addFlash('error', 'Trop de tentatives. Veuillez attendre une heure.');
                return $this->render('account/forgot_password.html.twig');
            }
            
            $email = trim(strip_tags($request->request->get('email')));
            
            if ($email && filter_var($email, FILTER_VALIDATE_EMAIL)) {
                $user = $userRepository->findByEmail($email);
                
                // Always show success message to prevent email enumeration
                $this->addFlash('success', 'Si cette adresse email existe dans notre système, vous recevrez un email avec les instructions pour réinitialiser votre mot de passe.');
                
                // Record attempt
                $session->set('last_password_reset_attempt', time());
                $session->set('password_reset_attempts', $attemptCount + 1);
                
                return $this->redirectToRoute('app_login');
            }
            
            $this->addFlash('error', 'Veuillez saisir une adresse email valide.');
        }

        return $this->render('account/forgot_password.html.twig');
    }

    #[Route('/premiere-connexion', name: 'app_first_connection')]
    public function firstConnection(
        Request $request, 
        EntityManagerInterface $entityManager,
        UserPasswordHasherInterface $passwordHasher,
        ValidatorInterface $validator
    ): Response {
        if ($request->isMethod('POST')) {
            $data = $request->request->all();
            
            // Sanitize input data
            $sanitizedData = [];
            foreach ($data as $key => $value) {
                if (is_string($value)) {
                    $sanitizedData[$key] = trim(strip_tags($value));
                } else {
                    $sanitizedData[$key] = $value;
                }
            }
            
            // Additional password strength validation
            $password = $sanitizedData['password'] ?? '';
            if (!$this->isStrongPassword($password)) {
                $this->addFlash('error', 'Le mot de passe doit contenir au moins 8 caractères, une majuscule, une minuscule, un chiffre et un caractère spécial.');
                return $this->render('account/first_connection.html.twig');
            }
            
            // Create new user with sanitized data
            $user = new User();
            $user->setNom(strtoupper($sanitizedData['nom'] ?? ''));
            $user->setPrenom(ucfirst($sanitizedData['prenom'] ?? ''));
            $user->setEmailPro($sanitizedData['email_pro'] ?? '');
            $user->setEmailPerso($sanitizedData['email_perso'] ?? null);
            $user->setTelephone($sanitizedData['telephone'] ?? '');
            $user->setFonction($sanitizedData['fonction'] ?? '');
            $user->setMetier($sanitizedData['metier'] ?? '');
            $user->setBureau($sanitizedData['bureau'] ?? '');
            $user->setIdentifiant($sanitizedData['email_pro'] ?? '');
            
            // Set default permissions
            $user->setAccesGestionUtilisateurs(false);
            $user->setAccesGestionEquipes(false);
            $user->setRoles(['ROLE_USER']);
            
            // Hash password
            if (!empty($data['password'])) {
                $hashedPassword = $passwordHasher->hashPassword($user, $data['password']);
                $user->setPassword($hashedPassword);
            }
            
            // Validate user
            $errors = $validator->validate($user);
            
            if (count($errors) > 0) {
                foreach ($errors as $error) {
                    $this->addFlash('error', $error->getMessage());
                }
            } else {
                try {
                    $entityManager->persist($user);
                    $entityManager->flush();
                    
                    $this->addFlash('success', 'Votre compte a été créé avec succès. Veuillez attendre qu\'un administrateur active vos accès.');
                    return $this->redirectToRoute('app_login');
                } catch (\Exception $e) {
                    $this->addFlash('error', 'Une erreur est survenue lors de la création du compte. Cette adresse email est peut-être déjà utilisée.');
                }
            }
        }

        return $this->render('account/first_connection.html.twig');
    }
    
    private function isStrongPassword(string $password): bool
    {
        // Check minimum length
        if (strlen($password) < 8) {
            return false;
        }
        
        // Check for uppercase letter
        if (!preg_match('/[A-Z]/', $password)) {
            return false;
        }
        
        // Check for lowercase letter
        if (!preg_match('/[a-z]/', $password)) {
            return false;
        }
        
        // Check for digit
        if (!preg_match('/\d/', $password)) {
            return false;
        }
        
        // Check for special character
        if (!preg_match('/[@$!%*?&]/', $password)) {
            return false;
        }
        
        return true;
    }
}