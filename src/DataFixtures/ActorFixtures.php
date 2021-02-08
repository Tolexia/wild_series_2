<?php

namespace App\DataFixtures;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use App\Entity\Actor;
use Doctrine\Common\DataFixtures\DependentFixtureInterface;

class ActorFixtures extends Fixture implements DependentFixtureInterface
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

    public function getDependencies()  
    {
        return [ProgramFixtures::class];  
    }

    public function load(ObjectManager $manager)
    {
        foreach (self::WALKINGDEAD as $actorName) {
            $actor = new Actor();
            $actor->setName($actorName);
            $actor->addProgram($this->getReference('program_0'));
            $manager->persist($actor);
        }

        foreach (self::HAUNTING as $actorName) {
            $actor = new Actor();
            $actor->setName($actorName);
            $actor->addProgram($this->getReference('program_1'));
            $manager->persist($actor);
        }

        foreach (self::FEAR as $actorName) {
            $actor = new Actor();
            $actor->setName($actorName);
            $actor->addProgram($this->getReference('program_5'));
            $manager->persist($actor);
        }

        foreach (self::PENNYDREADFUL as $actorName) {
            $actor = new Actor();
            $actor->setName($actorName);
            $actor->addProgram($this->getReference('program_4'));
            $manager->persist($actor);
        }

        $manager->flush();
    }

}
