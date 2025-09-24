<?php

namespace App\Controller\Admin;

use App\Entity\User;
use App\Repository\UserRepository;
use EasyCorp\Bundle\EasyAdminBundle\Config\Dashboard;
use EasyCorp\Bundle\EasyAdminBundle\Config\MenuItem;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractDashboardController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Http\Attribute\IsGranted;

class DashboardController extends AbstractDashboardController
{
    public function __construct(
        private UserRepository $userRepository
    ) {}

    #[Route('/admin', name: 'admin')]
    #[IsGranted('ROLE_ADMIN')]
    public function index(): Response
    {
        // Check if user has access to user management
        /** @var \App\Entity\User $user */
        $user = $this->getUser();
        
        if (!$user->isAccesGestionUtilisateurs()) {
            $this->addFlash('error', 'Vous n\'avez pas l\'autorisation d\'accéder à cette section.');
            return $this->redirectToRoute('app_dashboard');
        }

        // Get statistics
        $totalUsers = $this->userRepository->count([]);
        $admins = $this->userRepository->countAdmins();
        $usersWithUserManagement = $this->userRepository->count(['acces_gestion_utilisateurs' => true]);
        $usersWithTeamManagement = $this->userRepository->count(['acces_gestion_equipes' => true]);
        $recentUsers = $this->userRepository->findBy([], ['created_at' => 'DESC'], 5);

        return $this->render('admin/dashboard.html.twig', [
            'totalUsers' => $totalUsers,
            'admins' => $admins,
            'usersWithUserManagement' => $usersWithUserManagement,
            'usersWithTeamManagement' => $usersWithTeamManagement,
            'recentUsers' => $recentUsers,
        ]);
    }

    public function configureDashboard(): Dashboard
    {
        return Dashboard::new()
            ->setTitle('SMUR Pontoise - Administration')
            ->setFaviconPath('favicon.ico')
            ->renderContentMaximized()
            ->setLocales(['fr' => '🇫🇷 Français']);
    }

    public function configureMenuItems(): iterable
    {
        yield MenuItem::linkToDashboard('Tableau de bord', 'fa fa-home');
        
        yield MenuItem::section('Gestion des utilisateurs');
        yield MenuItem::linkToCrud('Utilisateurs', 'fa fa-users', User::class);
        
        yield MenuItem::section('Navigation');
        yield MenuItem::linkToRoute('Retour au bureau', 'fa fa-arrow-left', 'app_dashboard');
        yield MenuItem::linkToLogout('Déconnexion', 'fa fa-sign-out');
    }
}