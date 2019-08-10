<?php

namespace App\Tests\DataFixtures\Deviseur;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;
use App\DataFixtures\Deviseur\FeuilleCategorieFixtures;
use App\DataFixtures\Deviseur\ConditionPaiementFacturationFixtures;
use App\DataFixtures\Deviseur\ConditionPaiementModaliteReglementFixtures;
use App\DataFixtures\Deviseur\ConditionPaiementModeReglementFixtures;
use Doctrine\Common\DataFixtures\DependentFixtureInterface;

class FeuilleCategorieConditionPaiementFixtures extends Fixture implements DependentFixtureInterface
{
    public function load(ObjectManager $manager)
    {
        $entity1 = $this->getReference('contrat-categorie-adsl-vdsl');
        $entity1->addConditionsPaiementFacturation($this->getReference('condition-paiement-facturation-trimestrielle'));
        $entity1->addConditionsPaiementModaliteReglement($this->getReference('condition-paiement-modalite-reglement-comptant'));
        $entity1->addConditionsPaiementModeReglement($this->getReference('condition-paiement-mode-reglement-prelevement'));
        $entity1->addConditionsPaiementModeReglement($this->getReference('condition-paiement-mode-reglement-mandat'));
        $entity1->addConditionsPaiementModeReglement($this->getReference('condition-paiement-mode-reglement-cheque'));
        $entity1->addConditionsPaiementModeReglement($this->getReference('condition-paiement-mode-reglement-virement'));
        $manager->persist($entity1);
        
        $entity2 = $this->getReference('contrat-categorie-fibre-l2l');
        $entity2->addConditionsPaiementFacturation($this->getReference('condition-paiement-facturation-trimestrielle'));
        $entity2->addConditionsPaiementModaliteReglement($this->getReference('condition-paiement-modalite-reglement-comptant'));
        $entity2->addConditionsPaiementModeReglement($this->getReference('condition-paiement-mode-reglement-prelevement'));
        $entity2->addConditionsPaiementModeReglement($this->getReference('condition-paiement-mode-reglement-mandat'));
        $entity2->addConditionsPaiementModeReglement($this->getReference('condition-paiement-mode-reglement-cheque'));
        $entity2->addConditionsPaiementModeReglement($this->getReference('condition-paiement-mode-reglement-virement'));
        $manager->persist($entity2);
        
        $entity3 = $this->getReference('contrat-categorie-voix');
        $entity3->addConditionsPaiementFacturation($this->getReference('condition-paiement-facturation-trimestrielle'));
        $entity3->addConditionsPaiementModaliteReglement($this->getReference('condition-paiement-modalite-reglement-comptant'));
        $entity3->addConditionsPaiementModeReglement($this->getReference('condition-paiement-mode-reglement-prelevement'));
        $entity3->addConditionsPaiementModeReglement($this->getReference('condition-paiement-mode-reglement-mandat'));
        $entity3->addConditionsPaiementModeReglement($this->getReference('condition-paiement-mode-reglement-cheque'));
        $entity3->addConditionsPaiementModeReglement($this->getReference('condition-paiement-mode-reglement-virement'));
        $manager->persist($entity3);
        
        $entity4 = $this->getReference('contrat-categorie-cloud');
        $entity4->addConditionsPaiementFacturation($this->getReference('condition-paiement-facturation-trimestrielle'));
        $entity4->addConditionsPaiementModaliteReglement($this->getReference('condition-paiement-modalite-reglement-comptant'));
        $entity4->addConditionsPaiementModeReglement($this->getReference('condition-paiement-mode-reglement-prelevement'));
        $entity4->addConditionsPaiementModeReglement($this->getReference('condition-paiement-mode-reglement-mandat'));
        $entity4->addConditionsPaiementModeReglement($this->getReference('condition-paiement-mode-reglement-cheque'));
        $entity4->addConditionsPaiementModeReglement($this->getReference('condition-paiement-mode-reglement-virement'));
        $manager->persist($entity4);
        
        $entity5 = $this->getReference('contrat-categorie-iaas');
        $entity5->addConditionsPaiementFacturation($this->getReference('condition-paiement-facturation-trimestrielle'));
        $entity5->addConditionsPaiementModaliteReglement($this->getReference('condition-paiement-modalite-reglement-comptant'));
        $entity5->addConditionsPaiementModeReglement($this->getReference('condition-paiement-mode-reglement-prelevement'));
        $entity5->addConditionsPaiementModeReglement($this->getReference('condition-paiement-mode-reglement-mandat'));
        $entity5->addConditionsPaiementModeReglement($this->getReference('condition-paiement-mode-reglement-cheque'));
        $entity5->addConditionsPaiementModeReglement($this->getReference('condition-paiement-mode-reglement-virement'));
        $manager->persist($entity5);
        
        $entity6 = $this->getReference('contrat-categorie-sauvegarde');
        $entity6->addConditionsPaiementFacturation($this->getReference('condition-paiement-facturation-trimestrielle'));
        $entity6->addConditionsPaiementFacturation($this->getReference('condition-paiement-facturation-annuelle'));
        $entity6->addConditionsPaiementModaliteReglement($this->getReference('condition-paiement-modalite-reglement-comptant'));
        $entity6->addConditionsPaiementModeReglement($this->getReference('condition-paiement-mode-reglement-prelevement'));
        $entity6->addConditionsPaiementModeReglement($this->getReference('condition-paiement-mode-reglement-mandat'));
        $entity6->addConditionsPaiementModeReglement($this->getReference('condition-paiement-mode-reglement-cheque'));
        $entity6->addConditionsPaiementModeReglement($this->getReference('condition-paiement-mode-reglement-virement'));
        $manager->persist($entity6);
        
        $entity7 = $this->getReference('contrat-categorie-maintenance');
        $entity7->addConditionsPaiementFacturation($this->getReference('condition-paiement-facturation-trimestrielle'));
        $entity7->addConditionsPaiementFacturation($this->getReference('condition-paiement-facturation-annuelle'));
        $entity7->addConditionsPaiementModaliteReglement($this->getReference('condition-paiement-modalite-reglement-comptant'));
        $entity7->addConditionsPaiementModeReglement($this->getReference('condition-paiement-mode-reglement-prelevement'));
        $entity7->addConditionsPaiementModeReglement($this->getReference('condition-paiement-mode-reglement-mandat'));
        $entity7->addConditionsPaiementModeReglement($this->getReference('condition-paiement-mode-reglement-cheque'));
        $entity7->addConditionsPaiementModeReglement($this->getReference('condition-paiement-mode-reglement-virement'));
        $manager->persist($entity7);

        $manager->flush();
    }

    public function getDependencies()
    {
        return array(
            FeuilleCategorieFixtures::class,
            ConditionPaiementFacturationFixtures::class,
            ConditionPaiementModaliteReglementFixtures::class,
            ConditionPaiementModeReglementFixtures::class,
        );
    }
}
