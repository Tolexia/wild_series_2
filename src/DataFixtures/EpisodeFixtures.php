<?php

namespace App\DataFixtures;

use App\Entity\Episode;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\DataFixtures\DependentFixtureInterface;
use Doctrine\Persistence\ObjectManager;
use App\Repository\ProgramRepository;

class EpisodeFixtures extends Fixture implements DependentFixtureInterface
{
    private $programRepository;

    public function __construct(ProgramRepository $programRepository)
    {
        $this->programRepository = $programRepository;
    }

    public function getDependencies()  
    {
        return [SeasonFixtures::class];  
    }

    public function load(ObjectManager $manager)
    {
        foreach ($this->programRepository->findAll() as $program) {
            foreach ($program->getSeasons() as $season) {
                for ($i = 1; $i < 6; $i++) {
                    $episode = new Episode();
                    $episode->setProgram($program);
                    $episode->setSeason($season);
                    $episode->setTitle('episode ' . $i);
                    $manager->persist($episode);
                }
            }
        }
        $manager->flush();
    }
}
