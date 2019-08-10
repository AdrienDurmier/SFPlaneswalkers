<?php

namespace App\Tests\DataFixtures\Deviseur;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;
use Doctrine\Common\DataFixtures\DependentFixtureInterface;

use App\Entity\Deviseur\FeuilleServiceSauvegarde;

class FeuilleServiceFixtures extends Fixture implements DependentFixtureInterface
{
    public function load(ObjectManager $manager)
    {
        // Feuille Sauvegarde
        $feuille_sauvegarde = new FeuilleServiceSauvegarde();
        $feuille_sauvegarde->setContrat($this->getReference('contrat'));
        $feuille_sauvegarde->setDureeEngagement($this->getReference('fas-36mois'));
        $feuille_sauvegarde->setFeuilleCategorie($this->getReference('contrat-categorie-sauvegarde'));
        $manager->persist($feuille_sauvegarde);

        $manager->flush();

        // Références
        $this->addReference('feuille-sauvegarde', $feuille_sauvegarde);
    }

    public function getDependencies()
    {
        return array(
            ContratFixtures::class,
            DureeEngagementFixtures::class,
            FeuilleCategorieFixtures::class,
        );
    }
}
