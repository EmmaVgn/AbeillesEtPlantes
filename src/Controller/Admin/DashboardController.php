<?php

namespace App\Controller\Admin;

use App\Entity\Users;
use App\Entity\Images;
use App\Entity\Orders;
use App\Entity\Coupons;
use App\Entity\Products;
use App\Entity\Categories;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use EasyCorp\Bundle\EasyAdminBundle\Config\MenuItem;
use EasyCorp\Bundle\EasyAdminBundle\Config\Dashboard;
use EasyCorp\Bundle\EasyAdminBundle\Router\AdminUrlGenerator;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractDashboardController;

class DashboardController extends AbstractDashboardController
{
    #[Route('/admin', name: 'admin')]
    public function index(): Response
    {
        // Option 1. You can make your dashboard redirect to some common page of your backend
        //
        $adminUrlGenerator = $this->container->get(AdminUrlGenerator::class);
        return $this->redirect($adminUrlGenerator->setController(CategoriesCrudController::class)->generateUrl());

        // Option 2. You can make your dashboard redirect to different pages depending on the user
        //
        // if ('jane' === $this->getUser()->getUsername()) {
        //     return $this->redirect('...');
        // }

        // Option 3. You can render some custom template to display a proper dashboard with widgets, etc.
        // (tip: it's easier if your template extends from @EasyAdmin/page/content.html.twig)
        //
        // return $this->render('some/path/my-dashboard.html.twig');
    }

    public function configureDashboard(): Dashboard
    {
        return Dashboard::new()
            ->setTitle('Abeilles Et Plantes');
    }

    public function configureMenuItems(): iterable
    {
        yield MenuItem::linkToDashboard('Dashboard', 'fa fa-home');
        yield MenuItem::linkToCrud('Produits', 'fas fa-shop', Products::class);
        yield MenuItem::linkToCrud('Catégorie', 'fas fa-list', Categories::class);
        yield MenuItem::linkToCrud('Commandes', 'fas fa-cart-shopping', Orders::class);
        yield MenuItem::linkToCrud('Codes promos', 'fas fa-gift', Coupons::class);
        yield MenuItem::linkToCrud('Images', 'fas fa-image', Images::class);
        if ($this->IsGranted('ROLE_ADMIN')) {
            yield MenuItem::linkToCrud('Utilisateurs', 'fas fa-user', Users::class);
        }
        yield MenuItem::linkToRoute('Retour au site', 'fas fa-home', 'homepage');

    }
}
