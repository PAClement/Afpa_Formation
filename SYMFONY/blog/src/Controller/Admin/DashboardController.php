<?php

namespace App\Controller\Admin;

use App\Entity\User;
use App\Entity\Article;
use App\Entity\Category;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use EasyCorp\Bundle\EasyAdminBundle\Config\MenuItem;
use EasyCorp\Bundle\EasyAdminBundle\Config\Dashboard;
use EasyCorp\Bundle\EasyAdminBundle\Router\AdminUrlGenerator;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractDashboardController;

class DashboardController extends AbstractDashboardController
{
    /**
     * @Route("/admin", name="admin")
     */
    public function index(): Response
    {
        $routeBuilder = $this->container->get(AdminUrlGenerator::class);
        return $this->redirect($routeBuilder->setController(ArticleCrudController::class)->generateUrl());
    }

    public function configureDashboard(): Dashboard
    {
        return Dashboard::new()
            ->setTitle('Blog');
    }

    public function configureMenuItems(): iterable
    {
        return [
            yield  MenuItem::linkToDashboard('Dashboard', 'fa fa-home'),

            yield MenuItem::section('Blog'),
            yield MenuItem::linkToCrud('Categories', 'fas fa-list', Category::class),
            yield MenuItem::linkToCrud('Articles', 'fas fa-newspaper', Article::class),
            yield MenuItem::linkToCrud('Users', 'fas fa-users', User::class),

            yield MenuItem::section('Users'),
            yield MenuItem::linkToRoute('Ajout d\'admin', 'fas fa-user-plus', 'security_register', ["user_type" => "admin"]),

            yield MenuItem::section('Front-office'),
            yield MenuItem::linkToRoute('Site', 'fa fa-home', 'app_home'),

        ];
    }
}
