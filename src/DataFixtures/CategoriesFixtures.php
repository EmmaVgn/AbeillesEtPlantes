<?php

namespace App\DataFixtures;

use App\Entity\Categories;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use Symfony\Component\String\Slugger\SluggerInterface;

class CategoriesFixtures extends Fixture
{
    private $counter = 1;

    public function __construct(private SluggerInterface $slugger){}

    public function load(ObjectManager $manager): void
    {
        $parent = $this->createCategory('Huile essentielle', null, $manager);

        $this->createCategory('Menthe poivrée', $parent, $manager);
        $this->createCategory('Hélichryse Italienne', $parent, $manager);
        $this->createCategory('Lavande Fine', $parent, $manager);

        $parent = $this->createCategory('Recharge Hydrolat', null, $manager);

        $this->createCategory('Hélichryse Italienne', $parent, $manager);
        $this->createCategory('Menthe poivrée', $parent, $manager);
        $this->createCategory('Lavande Fine', $parent, $manager);

        $manager->flush();
    }

    public function createCategory(string $name, ?Categories $parent, ObjectManager $manager): Categories
    {
        $category = new Categories();
        $category->setName($name);
        $category->setSlug($this->slugger->slug($category->getName())->lower());
        $category->setParent($parent);
        $manager->persist($category);

        $this->addReference('cat-'.$this->counter, $category);
        $this->counter++;

        return $category;
    }
}
