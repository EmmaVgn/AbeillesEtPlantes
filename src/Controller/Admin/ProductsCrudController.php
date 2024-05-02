<?php

namespace App\Controller\Admin;

use App\Entity\Products;
use App\Form\Type\CustomDateType;
use App\Form\ProductImageFormType;
use App\Form\ProductsImagesFormType;
use EasyCorp\Bundle\EasyAdminBundle\Config\Crud;
use EasyCorp\Bundle\EasyAdminBundle\Field\IdField;
use EasyCorp\Bundle\EasyAdminBundle\Field\DateField;
use EasyCorp\Bundle\EasyAdminBundle\Field\FormField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;
use EasyCorp\Bundle\EasyAdminBundle\Field\MoneyField;
use EasyCorp\Bundle\EasyAdminBundle\Field\ChoiceField;
use EasyCorp\Bundle\EasyAdminBundle\Field\NumberField;
use EasyCorp\Bundle\EasyAdminBundle\Field\BooleanField;
use EasyCorp\Bundle\EasyAdminBundle\Field\CollectionField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextEditorField;
use EasyCorp\Bundle\EasyAdminBundle\Field\AssociationField;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;

class ProductsCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Products::class;
    }

    public function configureCrud(Crud $crud): Crud
    {
        return $crud
            ->setPageTitle('index', 'Produits :')
            ->setPageTitle('new', 'Créer un produit')
            ->setPaginatorPageSize(10)
            ->setEntityLabelInSingular('un produit');
    }

    public function configureFields(string $pageName): iterable
    {
        return [
            IdField::new('id')->onlyOnIndex(),
            FormField::addColumn(6),
            TextField::new('name', 'Nom du produit'),
            MoneyField::new('price', 'Prix du produit')
            ->setCurrency('EUR')
            ->setTextAlign('left')
            ->setFormTypeOption('divisor', 100),
            TextEditorField::new('Description', 'Description courte du produit'),
            AssociationField::new('categories', 'Catégorie du produit'),
            NumberField::new('stock', 'Stock du produit'),
            NumberField::new('capacity', 'Capacité du produit'),
            DateField::new('bestBeforeDate', 'Date de péremption'),
            CollectionField::new('images', 'Images du véhicule')
            ->setEntryType(ProductsImagesFormType::class)
            ->hideOnIndex(),
            BooleanField::new('isValid', 'Produit en ligne'),
        ];
    }
}
