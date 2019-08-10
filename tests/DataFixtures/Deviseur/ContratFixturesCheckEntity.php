<?php

namespace App\Tests\DataFixtures\Deviseur;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;
use Doctrine\Common\DataFixtures\DependentFixtureInterface;

use App\Entity\Deviseur\LigneXDSL;
use App\Entity\Deviseur\FeuilleServiceXDSL;
use App\Entity\Deviseur\Contrat;
use App\Tests\DataFixtures\UserFixtures;

class ContratFixturesCheckEntity extends Fixture implements DependentFixtureInterface
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

        $manager->flush();

        // Références
        $this->addReference('contrat-complet', $contrat);
        $this->addReference('feuille-xdsl', $feuille_xdsl);
    }

    public function getDependencies()
    {
        return array(
            UserFixtures::class,
            ServiceFixtures::class,
        );
    }
}
