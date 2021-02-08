<?php

namespace App\DataFixtures;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use App\Entity\Actor;

class ActorFixtures extends Fixture
{
    const WALKINGDEAD = [	
        "Andrew Lincoln",
        "Jon Bernthal",
        "Sarah Wayne Callies",
        "Laurie Holden",
        "Jeffrey DeMunn",
        "Steven Yeun",
        "Chandler Riggs",
        "Norman Reedus",
        "Lauren Cohan",
        "Danai Gurira",
    ];

    const HAUNTING = [
        "	
        Michiel Huisman",
        "Carla Gugino",
        "Henry Thomas",
        "Elizabeth Reaser",
        "Oliver Jackson-Cohen",
        "Kate Siegel",
        "Victoria Pedretti",
        "Lulu Wilson",
        "Mckenna Grace",
        "Paxton Singleton",
        "Julian Hilliard",
        "Violet McGraw",
        "Timothy Hutton",
    ];

    const FEAR = [
        "Kim Dickens",
        "Cliff Curtis",
        "Frank Dillane",
        "Alycia Debnam-Carey",
        "Elizabeth Rodriguez",
        "Mercedes Mason",
        "Lorenzo James Henrie",
        "Rubén Blades",
        "Colman Domingo",
        "Michelle Ang",

    ];

    const PENNYDREADFUL = [      	
        "Reeve Carney",
        "Timothy Dalton",
        "Eva Green",
        "Rory Kinnear",
        "Billie Piper",
        "Danny Sapani",
        "Harry Treadaway",
        "Josh Hartnett",
        "Helen McCrory",
        "Simon Russell Beale",
    ];

    public function load(ObjectManager $manager)
    {
     

        $manager->flush();
    }
}
