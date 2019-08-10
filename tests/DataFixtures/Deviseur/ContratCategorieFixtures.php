<?php

namespace App\Tests\DataFixtures\Deviseur;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;
use App\Entity\Deviseur\ContratCategorie;

class ContratCategorieFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
        $entity1 = new ContratCategorie();
        $entity1->setLabel("Nouveau");
        $entity1->setLabelLong("Souscription d'un nouveau contrat");
        $entity1->setCode("nouveau");
        $manager->persist($entity1);
        
        $entity2 = new ContratCategorie();
        $entity2->setLabel("Renouvellement");
        $entity2->setLabelLong("Renouvellement de contrat");
        $entity2->setCode("renouvellement");
        $manager->persist($entity2);
        
        $entity3 = new ContratCategorie();
        $entity3->setLabel("Avenant");
        $entity3->setLabelLong("Avenant au contrat n°");
        $entity3->setCode("avenant");
        $manager->persist($entity3);

        $manager->flush();
        
    }
}
