<?php

namespace App\Tests\DataFixtures\Deviseur;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;
use App\Entity\Deviseur\ConditionPaiementModeReglement;

class ConditionPaiementModeReglementFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
        $entity1 = new ConditionPaiementModeReglement();
        $entity1->setLabel("Prélèvement automatique");
        $entity1->setDefaut(true);
        $manager->persist($entity1);
        
        $entity2 = new ConditionPaiementModeReglement();
        $entity2->setLabel("Mandat administratif");
        $entity2->setDefaut(false);
        $manager->persist($entity2);
        
        $entity3 = new ConditionPaiementModeReglement();
        $entity3->setLabel("Chèque");
        $entity3->setDefaut(false);
        $manager->persist($entity3);
        
        $entity4 = new ConditionPaiementModeReglement();
        $entity4->setLabel("Virement");
        $entity4->setDefaut(false);
        $manager->persist($entity4);

        $manager->flush();

        $this->addReference('condition-paiement-mode-reglement-prelevement', $entity1);
        $this->addReference('condition-paiement-mode-reglement-mandat', $entity2);
        $this->addReference('condition-paiement-mode-reglement-cheque', $entity3);
        $this->addReference('condition-paiement-mode-reglement-virement', $entity4);
    }
}
