<?php

namespace App\Tests\DataFixtures\Deviseur;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;
use Doctrine\Common\DataFixtures\DependentFixtureInterface;

use App\Entity\Deviseur\FeuilleServiceSauvegardeRepertoire;

class FeuilleServiceSauvegardeRepertoireFixtures extends Fixture implements DependentFixtureInterface
{
    public function load(ObjectManager $manager)
    {
        $repertoire = new FeuilleServiceSauvegardeRepertoire;
        $repertoire->setLabel("");
        $repertoire->setFeuille($this->getReference('feuille-sauvegarde'));
        $manager->persist($repertoire);

        $manager->flush();
    }

    public function getDependencies()
    {
        return array(
            FeuilleServiceFixtures::class,
        );
    }
}
