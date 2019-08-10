<?php

namespace App\Tests\DataFixtures\Deviseur;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;
use Doctrine\Common\DataFixtures\DependentFixtureInterface;

use App\Entity\Deviseur\LigneXDSL;
use App\Entity\Deviseur\FeuilleServiceXDSL;
use App\Entity\Deviseur\Contrat;
use App\Entity\Deviseur\LigneDerogation;
use App\Tests\DataFixtures\UserFixtures;

class LigneDerogationFixtures extends Fixture implements DependentFixtureInterface
{
    public function load(ObjectManager $manager)
    {
        // Utils
        $dateTime = new \DateTime();

        // Contrat
        $contrat = new Contrat();
        $contrat->setAuthor($this->getReference('user-adrien'));
        $contrat->setCreated($dateTime->modify('-10 day'));
        $contrat->setUpdated($dateTime->modify('-3 day'));
        $manager->persist($contrat);

        // Feuille XDSL
        $feuille_xdsl = new FeuilleServiceXDSL();
        $feuille_xdsl->setContrat($contrat);
        $feuille_xdsl->setDureeEngagement($this->getReference('fas-36mois'));
        $feuille_xdsl->setFeuilleCategorie($this->getReference('contrat-categorie-adsl-vdsl'));
        $manager->persist($feuille_xdsl);
        $manager->flush();

        // Lignes de la feuille XDSL
        $ligne1 = new LigneXDSL();
        $ligne1->setFeuille($feuille_xdsl);
        $ligne1->setService($this->getReference('service-xdsl-1'));
        $ligne1->setQuantite(1);
        $ligne1->setPrix(39.00);
        $ligne1->setNumeroSupportADSL('0555225364');
        $ligne1->setCreationLigne(true);
        $manager->persist($ligne1);

        $ligne2 = new LigneXDSL();
        $ligne2->setFeuille($feuille_xdsl);
        $ligne2->setService($this->getReference('service-xdsl-2'));
        $ligne2->setQuantite(1);
        $ligne2->setPrix(36.00);
        $ligne2->setNumeroSupportADSL('0498155432');
        $ligne2->setCreationLigne(true);
        $manager->persist($ligne2);

        // Dérogation
        $derogation1 = new LigneDerogation();
        $derogation1->setLigne($ligne1);
        $derogation1->setDemandePrix(35.00);
        $derogation1->setDemandeUser($this->getReference('user-david'));
        $derogation1->setDemandeDate(new \DateTime());
        $derogation1->setDemandeCommentaire("Demande d'alignement de notre tarif avec celui de notre concurrent AwesomeCorp");
        $manager->persist($derogation1);

        // Dérogation
        $derogation2 = new LigneDerogation();
        $derogation2->setLigne($ligne2);
        $derogation2->setDemandePrix(35.00);
        $derogation2->setDemandeUser($this->getReference('user-david'));
        $derogation2->setDemandeDate(new \DateTime());
        $derogation2->setDemandeCommentaire("Demande d'alignement de notre tarif avec celui de notre concurrent AwesomeCorp");
        $derogation2->setAccordEtat(false);
        $manager->persist($derogation2);

        // Dérogation
        $derogation3 = new LigneDerogation();
        $derogation3->setLigne($ligne2);
        $derogation3->setDemandePrix(35.00);
        $derogation3->setDemandeUser($this->getReference('user-david'));
        $derogation3->setDemandeDate(new \DateTime());
        $derogation3->setDemandeCommentaire("Demande d'alignement de notre tarif avec celui de notre concurrent AwesomeCorp");
        $derogation3->setAccordEtat(true);
        $manager->persist($derogation3);

        $manager->flush();

        // Références
        $this->addReference('contrat-complet', $contrat);
        $this->addReference('feuille-xdsl', $feuille_xdsl);
        $this->addReference('ligne-1', $ligne1);
        $this->addReference('ligne-2', $ligne2);
        $this->addReference('derogation-1', $derogation1);
        $this->addReference('derogation-2', $derogation2);
        $this->addReference('derogation-3', $derogation3);
    }

    public function getDependencies()
    {
        return array(
            UserFixtures::class,
            ServiceFixtures::class,
        );
    }
}
