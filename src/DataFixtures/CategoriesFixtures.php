<?php

namespace App\DataFixtures;

use App\Entity\Categories;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use Symfony\Component\String\Slugger\SluggerInterface;

class CategoriesFixtures extends Fixture
{
    public function __construct(private SluggerInterface $slugger){}

    public function load(ObjectManager $manager)
    {
        $c = [
            1 => [
                'name' => 'Huiles essentielles',
                'slug' => 'huiles-essentielles'
            ],
            2 => [
                'name' => 'Recharges hydrolats',
                'slug' => 'recharges-hydrolats'
            ],
        ];

        foreach($c as $key => $value){
            $category = new Categories();
            $category->setName($value['name']);
            $category->setSlug($value['slug']);
            $manager->persist($category);
            $this->addReference('category-'.$key, $category);
        }

        $manager->flush();
    }
}
