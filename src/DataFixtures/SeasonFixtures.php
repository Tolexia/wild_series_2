<?php

namespace App\DataFixtures;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use App\Entity\Season;
use App\Repository\ProgramRepository;
use Doctrine\Common\DataFixtures\DependentFixtureInterface;

class SeasonFixtures extends Fixture implements DependentFixtureInterface
{
    private $programRepository;

    public function __construct(ProgramRepository $programRepository)
    {
        $this->programRepository = $programRepository;
    }

    public function load(ObjectManager $manager)
    {
        foreach ($this->programRepository->findAll() as $program) {
            for ($i=1; $i <= 3 ; $i++) {
                $season = new Season();
                $season->setNumber($i);
                $season->setProgram($program);
                $manager->persist($season);
            }
        }
        
        $manager->flush();
    }

    public function getDependencies()  
    {
        return [ProgramFixtures::class];  
    }
}
