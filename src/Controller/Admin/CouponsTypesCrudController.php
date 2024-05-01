<?php

namespace App\Controller\Admin;

use App\Entity\CouponsTypes;
use EasyCorp\Bundle\EasyAdminBundle\Config\Crud;
use EasyCorp\Bundle\EasyAdminBundle\Field\IdField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextEditorField;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;

class CouponsTypesCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return CouponsTypes::class;
    }

    public function configureCrud(Crud $crud): Crud
    {
        return $crud
            ->setPageTitle('index', 'Code Promo')
            ->setPageTitle('new', 'Ajouter un code promo')
            ->setDefaultSort(['id' => 'ASC'])
            ->setPaginatorPageSize(10)
            ->setEntityLabelInSingular('Coupons');
    }

    
    public function configureFields(string $pageName): iterable
    {
        return [
            IdField::new('id', 'ID')->onlyOnIndex(),
            TextField::new('name', 'Nom du code promo')
            ->setFormTypeOptions(['attr' => ['placeholder' => 'Ex: FRENCHDAY24']]),
            TextField::new('slug', 'Slug')->onlyOnIndex(),
        ];
    }

    /*
    public function configureFields(string $pageName): iterable
    {
        return [
            IdField::new('id'),
            TextField::new('title'),
            TextEditorField::new('description'),
        ];
    }
    */
}
