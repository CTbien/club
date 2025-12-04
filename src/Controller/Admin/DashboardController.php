<?php

namespace App\Controller\Admin;

use EasyCorp\Bundle\EasyAdminBundle\Config\Dashboard;
use EasyCorp\Bundle\EasyAdminBundle\Config\MenuItem;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractDashboardController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route; // <--- C'est ça qu'il te faut !

class DashboardController extends AbstractDashboardController
{
    // On utilise #[Route] au lieu de #[AdminDashboard] pour éviter ton bug
    #[Route('/admin', name: 'admin')]
    public function index(): Response
    {
        // Redirige vers le template que nous avons créé ensemble
        return $this->render('dashboard.html.twig');
    }

    public function configureDashboard(): Dashboard
    {
        return Dashboard::new()
            ->setTitle('Club');
    }

    public function configureMenuItems(): iterable
    {
        yield MenuItem::linkToDashboard('Dashboard', 'fa fa-home');
        // yield MenuItem::linkToCrud('Utilisateurs', 'fas fa-users', User::class);
    }
}
