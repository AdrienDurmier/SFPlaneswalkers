<?php

namespace App\Tests\DataFixtures\Deviseur;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;
use App\Entity\Deviseur\DureeEngagement;

class DureeEngagementFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
        $duree_engagement1 = new DureeEngagement();
        $duree_engagement1->setLabel("12 mois");
        $manager->persist($duree_engagement1);

        $duree_engagement2 = new DureeEngagement();
        $duree_engagement2->setLabel("36 mois");
        $manager->persist($duree_engagement2);

        $duree_engagement3 = new DureeEngagement();
        $duree_engagement3->setLabel("60 mois");
        $manager->persist($duree_engagement3);

        $manager->flush();

        $this->addReference('fas-12mois', $duree_engagement1);
        $this->addReference('fas-36mois', $duree_engagement2);
        $this->addReference('fas-60mois', $duree_engagement3);

    }
}
