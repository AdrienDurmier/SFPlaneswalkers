<?php

namespace App\Tests\DataFixtures\Deviseur;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;
use App\Entity\Deviseur\ConditionPaiementFacturation;

class ConditionPaiementFacturationFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
        $entity1 = new ConditionPaiementFacturation();
        $entity1->setLabel("Mensuelle");
        $entity1->setDefaut(false);
        $manager->persist($entity1);
        
        $entity2 = new ConditionPaiementFacturation();
        $entity2->setLabel("Trimestrielle");
        $entity2->setDefaut(true);
        $manager->persist($entity2);
        
        $entity3 = new ConditionPaiementFacturation();
        $entity3->setLabel("Annuelle");
        $entity3->setDefaut(false);
        $manager->persist($entity3);

        $manager->flush();
        
        $this->addReference('condition-paiement-facturation-mensuelle', $entity1);
        $this->addReference('condition-paiement-facturation-trimestrielle', $entity2);
        $this->addReference('condition-paiement-facturation-annuelle', $entity3);
    }
}
