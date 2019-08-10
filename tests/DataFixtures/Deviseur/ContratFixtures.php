<?php

namespace App\Tests\DataFixtures\Deviseur;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;
use Doctrine\Common\DataFixtures\DependentFixtureInterface;

use App\Entity\Deviseur\Contrat;
use App\Tests\DataFixtures\UserFixtures;

class ContratFixtures extends Fixture implements DependentFixtureInterface
{
    public function load(ObjectManager $manager)
    {
        // Utils
        $dateTime = new \DateTime();

        $contrat = new Contrat();
        $contrat->setAuthor($this->getReference('user-adrien'));
        $contrat->setUpdated($dateTime->modify('-3 day'));
        $manager->persist($contrat);
        $manager->flush();

        // Références
        $this->addReference('contrat', $contrat);
    }

    public function getDependencies()
    {
        return array(
            UserFixtures::class,
        );
    }
}
