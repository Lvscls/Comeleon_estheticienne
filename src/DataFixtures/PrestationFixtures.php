<?php

namespace App\DataFixtures;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use App\Entity\Prestation;

class PrestationFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
        for($i = 0; $i<10; $i++)
        {
            $prestation = new Prestation();
            $prestation->setLibelle("Libelle n°$i")
                        ->setPrix(25)
                        ->setDescription("description n°$i")
                        ->setNbrSeance(5);
            $manager->persist($prestation);
        }


        $manager->flush();
    }
}
