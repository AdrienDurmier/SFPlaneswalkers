<?php

namespace App\Tests\DataFixtures\Deviseur;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;
use App\Entity\Deviseur\ServiceCategorie;
use App\DataFixtures\Deviseur\FeuilleCategorieFixtures;
use Doctrine\Common\DataFixtures\DependentFixtureInterface;

class ServiceCategorieFixtures extends Fixture implements DependentFixtureInterface
{
    public function load(ObjectManager $manager)
    {
        // - ADSL/VDSL
        $entity1 = new ServiceCategorie();
        $entity1->setLabel("ADSL/VDSL");
        $entity1->setFeuilleCategorie($this->getReference('contrat-categorie-adsl-vdsl'));
        $manager->persist($entity1);

        $entity1b = new ServiceCategorie();
        $entity1b->setLabel("Options complémentaires");
        $entity1b->setFeuilleCategorie($this->getReference('contrat-categorie-adsl-vdsl'));
        $manager->persist($entity1b);

        // - Fibre L2L
        $entity2 = new ServiceCategorie();
        $entity2->setLabel("Fibre/L2L");
        $entity2->setFeuilleCategorie($this->getReference('contrat-categorie-fibre-l2l'));
        $manager->persist($entity2);

        $entity2b = new ServiceCategorie();
        $entity2b->setLabel("Options complémentaires");
        $entity2b->setFeuilleCategorie($this->getReference('contrat-categorie-fibre-l2l'));
        $manager->persist($entity2b);

        // - Voix
        $entity3 = new ServiceCategorie();
        $entity3->setLabel("CENTREX VOIP");
        $entity3->setFeuilleCategorie($this->getReference('contrat-categorie-voix'));
        $manager->persist($entity3);

        $entity4 = new ServiceCategorie();
        $entity4->setLabel("Mobile/4G");
        $entity4->setFeuilleCategorie($this->getReference('contrat-categorie-voix'));
        $manager->persist($entity4);

        // - Cloud
        $entity5 = new ServiceCategorie();
        $entity5->setLabel("Services Cloud");
        $entity5->setFeuilleCategorie($this->getReference('contrat-categorie-cloud'));
        $manager->persist($entity5);

        $entity6 = new ServiceCategorie();
        $entity6->setLabel("Messagerie classique");
        $entity6->setFeuilleCategorie($this->getReference('contrat-categorie-cloud'));
        $manager->persist($entity6);

        $entity7 = new ServiceCategorie();
        $entity7->setLabel("Messagerie collaborative");
        $entity7->setFeuilleCategorie($this->getReference('contrat-categorie-cloud'));
        $manager->persist($entity7);

        // - IAAS
        $entity8 = new ServiceCategorie();
        $entity8->setLabel("Services IAAS");
        $entity8->setFeuilleCategorie($this->getReference('contrat-categorie-iaas'));
        $manager->persist($entity8);

        $entity9 = new ServiceCategorie();
        $entity9->setLabel("Messagerie classique");
        $entity9->setFeuilleCategorie($this->getReference('contrat-categorie-iaas'));
        $manager->persist($entity9);

        $entity10 = new ServiceCategorie();
        $entity10->setLabel("Messagerie collaborative");
        $entity10->setFeuilleCategorie($this->getReference('contrat-categorie-iaas'));
        $manager->persist($entity10);

        // - Sauvegarde
        $entity11 = new ServiceCategorie();
        $entity11->setLabel("SAUVEGARDE EXTERNALISEE - FORFAIT LIVE DATA PROTECTION");
        $entity11->setFeuilleCategorie($this->getReference('contrat-categorie-sauvegarde'));
        $manager->persist($entity11);

        $entity12 = new ServiceCategorie();
        $entity12->setLabel("SAUVEGARDE EXTERNALISEE - LIVE DATA PROTECTION AU GO");
        $entity12->setFeuilleCategorie($this->getReference('contrat-categorie-sauvegarde'));
        $manager->persist($entity12);

        // - Maintenance
        $entity13 = new ServiceCategorie();
        $entity13->setLabel("Matériel");
        $entity13->setFeuilleCategorie($this->getReference('contrat-categorie-maintenance'));
        $manager->persist($entity13);

        $entity14 = new ServiceCategorie();
        $entity14->setLabel("Téléphonie");
        $entity14->setFeuilleCategorie($this->getReference('contrat-categorie-maintenance'));
        $manager->persist($entity14);
        
        $manager->flush();

        $this->addReference('service-categorie-adsl-vdsl', $entity1);
        $this->addReference('service-categorie-adsl-vdsl-option', $entity1b);
        $this->addReference('service-categorie-fibre-l2l', $entity2);
        $this->addReference('service-categorie-fibre-l2l-option', $entity2b);
        $this->addReference('service-categorie-voix-centrex-voip', $entity3);
        $this->addReference('service-categorie-voix-mobile-4g', $entity4);
        $this->addReference('service-categorie-cloud-services-cloud', $entity5);
        $this->addReference('service-categorie-cloud-messagerie-classique', $entity6);
        $this->addReference('service-categorie-cloud-messagerie-collaborative', $entity7);
        $this->addReference('service-categorie-iaas-services-iaas', $entity8);
        $this->addReference('service-categorie-iaas-messagerie-classique', $entity9);
        $this->addReference('service-categorie-iaas-messagerie-collaborative', $entity10);
        $this->addReference('service-categorie-sauvegarde-protection', $entity11);
        $this->addReference('service-categorie-sauvegarde-protection-go', $entity12);
        $this->addReference('service-categorie-maintenance-materiel', $entity13);
        $this->addReference('service-categorie-maintenance-telephonie', $entity14);
    }

    public function getDependencies()
    {
        return array(
            FeuilleCategorieFixtures::class,
        );
    }
}
