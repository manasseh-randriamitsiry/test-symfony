<?php

namespace App\DataFixtures;

use App\Entity\User;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;

class UserFixtures extends Fixture
{
    public function __construct(
        private UserPasswordHasherInterface $passwordHasher
    ) {}

    public function load(ObjectManager $manager): void
    {
        // Create admin user
        $admin = new User();
        $admin->setIdentifiant('admin@smur-pontoise.fr');
        $admin->setNom('ADMINISTRATEUR');
        $admin->setPrenom('Système');
        $admin->setEmailPro('admin@smur-pontoise.fr');
        $admin->setTelephone('0123456789');
        $admin->setFonction('Med SMUR');
        $admin->setMetier('Medecin');
        $admin->setBureau('Med SMUR');
        $admin->setAccesGestionUtilisateurs(true);
        $admin->setAccesGestionEquipes(true);
        $admin->setRoles(['ROLE_ADMIN', 'ROLE_USER']);
        
        // Hash password
        $hashedPassword = $this->passwordHasher->hashPassword($admin, 'admin123');
        $admin->setPassword($hashedPassword);
        
        $manager->persist($admin);

        // Create sample users
        $users = [
            [
                'nom' => 'MARTIN',
                'prenom' => 'Jean',
                'email_pro' => 'j.martin@smur-pontoise.fr',
                'email_perso' => 'jean.martin@gmail.com',
                'telephone' => '0123456780',
                'fonction' => 'Med SMUR',
                'metier' => 'Medecin',
                'bureau' => 'Med SMUR',
                'acces_utilisateurs' => true,
                'acces_equipes' => false,
                'password' => 'password123'
            ],
            [
                'nom' => 'DUPONT',
                'prenom' => 'Marie',
                'email_pro' => 'm.dupont@smur-pontoise.fr',
                'email_perso' => null,
                'telephone' => '0123456781',
                'fonction' => 'Inf SMUR',
                'metier' => 'IDE',
                'bureau' => 'Paramed SMUR',
                'acces_utilisateurs' => false,
                'acces_equipes' => true,
                'password' => 'password123'
            ],
            [
                'nom' => 'BERNARD',
                'prenom' => 'Pierre',
                'email_pro' => 'p.bernard@smur-pontoise.fr',
                'email_perso' => 'pierre.bernard@outlook.fr',
                'telephone' => '0123456782',
                'fonction' => 'Amb SMUR',
                'metier' => 'ARM',
                'bureau' => 'Paramed SMUR',
                'acces_utilisateurs' => false,
                'acces_equipes' => false,
                'password' => 'password123'
            ],
            [
                'nom' => 'PETIT',
                'prenom' => 'Sophie',
                'email_pro' => 's.petit@smur-pontoise.fr',
                'email_perso' => 'sophie.petit@yahoo.fr',
                'telephone' => '0123456783',
                'fonction' => 'SAMU',
                'metier' => 'ARM',
                'bureau' => 'SAMU',
                'acces_utilisateurs' => false,
                'acces_equipes' => false,
                'password' => 'password123'
            ],
            [
                'nom' => 'ROBERT',
                'prenom' => 'Luc',
                'email_pro' => 'l.robert@smur-pontoise.fr',
                'email_perso' => null,
                'telephone' => '0123456784',
                'fonction' => 'Stg SMUR',
                'metier' => 'étudiant paramedical',
                'bureau' => 'Paramed SMUR',
                'acces_utilisateurs' => false,
                'acces_equipes' => false,
                'password' => 'password123'
            ]
        ];

        foreach ($users as $userData) {
            $user = new User();
            $user->setIdentifiant($userData['email_pro']);
            $user->setNom($userData['nom']);
            $user->setPrenom($userData['prenom']);
            $user->setEmailPro($userData['email_pro']);
            $user->setEmailPerso($userData['email_perso']);
            $user->setTelephone($userData['telephone']);
            $user->setFonction($userData['fonction']);
            $user->setMetier($userData['metier']);
            $user->setBureau($userData['bureau']);
            $user->setAccesGestionUtilisateurs($userData['acces_utilisateurs']);
            $user->setAccesGestionEquipes($userData['acces_equipes']);
            $user->setRoles(['ROLE_USER']);
            
            // Hash password
            $hashedPassword = $this->passwordHasher->hashPassword($user, $userData['password']);
            $user->setPassword($hashedPassword);
            
            $manager->persist($user);
        }

        $manager->flush();
    }
}