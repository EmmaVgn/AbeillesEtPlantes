<?php

namespace App\Controller\Admin;

use App\Entity\Categories;
use EasyCorp\Bundle\EasyAdminBundle\Config\Crud;
use EasyCorp\Bundle\EasyAdminBundle\Field\IdField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextEditorField;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;

class CategoriesCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Categories::class;
    }

    public function configureCrud(Crud $crud): Crud
    {
        return $crud
            ->setPageTitle('index', 'Catégorie')
            ->setPageTitle('new', 'Ajouter une catégorie')
            ->setDefaultSort(['id' => 'ASC'])
            ->setPaginatorPageSize(10)
            ->setEntityLabelInSingular('Catégorie');
    }

    
    public function configureFields(string $pageName): iterable
    {
        return [
            IdField::new('id', 'ID')->onlyOnIndex(),
            TextField::new('name', 'Nom de la catégorie')
            ->setFormTypeOptions(['attr' => ['placeholder' => 'Ex: Miel bio']]),
            TextField::new('slug', 'Slug')->onlyOnIndex(),
        ];
    }
    
}