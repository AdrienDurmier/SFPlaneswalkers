<?php

namespace App\Tests\DataFixtures\Deviseur;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;
use App\Entity\Deviseur\VoixEstimation;

class VoixEstimationFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
        $entity1 = new VoixEstimation();
        $entity1->setLabel("Appels IP fixe");
        $entity1->setPrix(0.010);
        $manager->persist($entity1);
        
        $entity2 = new VoixEstimation();
        $entity2->setLabel("Appels IP mobile");
        $entity2->setPrix(0.032);
        $manager->persist($entity2);
        
        $entity3 = new VoixEstimation();
        $entity3->setLabel("Appels VGA fixe");
        $entity3->setPrix(0.020);
        $manager->persist($entity3);
        
        $entity4 = new VoixEstimation();
        $entity4->setLabel("Appels VGA mobile");
        $entity4->setPrix(0.080);
        $manager->persist($entity4);

        $entity5 = new VoixEstimation();
        $entity5->setLabel("Forfait mobile à la consommation");
        $entity5->setPrix(0.050);
        $manager->persist($entity5);

        $manager->flush();

        // Références
        $this->addReference('voix-estimation-1', $entity1);
        $this->addReference('voix-estimation-2', $entity2);
        $this->addReference('voix-estimation-3', $entity3);
        $this->addReference('voix-estimation-4', $entity4);
        $this->addReference('voix-estimation-5', $entity5);
    }
}
