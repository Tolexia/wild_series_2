<?php

namespace App\DataFixtures;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use App\Entity\Category;

class CategoryFixtures extends Fixture
{
    const CATEGORIES = [
        'Action',
        'Aventure',
        'Horreur',
        'Comédie',
        'Drame',
        'Animation',
        'Science-Fiction',
        'Fantastique',
        'Thriller',
        'Documentaire',
        'Guerre',
        'Biopic',
        'Comédie dramatique'
    ];

    public function load(ObjectManager $manager)
    {
       foreach (self::CATEGORIES as $key => $categoryName) {
           $category = new Category();
           $category->setName($categoryName);
           $manager->persist($category);
           $this->addReference('category_' . $key, $category);
       }

        $manager->flush();
    }
}
