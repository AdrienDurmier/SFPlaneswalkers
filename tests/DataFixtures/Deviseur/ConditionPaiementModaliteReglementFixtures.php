<?php

namespace App\Tests\DataFixtures\Deviseur;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;
use App\Entity\Deviseur\ConditionPaiementModaliteReglement;

class ConditionPaiementModaliteReglementFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
        $entity1 = new ConditionPaiementModaliteReglement();
        $entity1->setLabel("Paiement comptant");
        $entity1->setDefaut(true);
        $manager->persist($entity1);

        $manager->flush();
        
        $this->addReference('condition-paiement-modalite-reglement-comptant', $entity1);
    }
}
