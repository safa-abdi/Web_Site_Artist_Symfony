<?php

namespace App\Controller\Admin;

use App\Entity\Admin;
use App\Entity\Cours;
use App\Entity\Enseignant;
use App\Entity\Membre;
use EasyCorp\Bundle\EasyAdminBundle\Config\Dashboard;
use EasyCorp\Bundle\EasyAdminBundle\Config\MenuItem;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractDashboardController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class DashboardController extends AbstractDashboardController
{
    /**
     * @Route("/admin", name="admin")
     */
    public function index(): Response
    {
        return parent::index();
    }

    public function configureDashboard(): Dashboard
    {
        return Dashboard::new()
            ->setTitle('L Artistou');
    }

    public function configureMenuItems(): iterable
    {
        yield MenuItem::linktoDashboard('Dashboard', 'fa fa-home');
        yield MenuItem::linkToCrud('Enseignant', 'fas fa-list', Enseignant::class);
        yield MenuItem::linkToCrud('Cours', 'fas fa-list', Cours::class);
        yield MenuItem::linkToCrud('Membre', 'fas fa-list', Membre::class);
        yield MenuItem::linkToCrud('Admin', 'fas fa-list', Admin::class);
    }
}
