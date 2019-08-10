<?php

namespace App\Tests\DataFixtures\Deviseur;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;
use Doctrine\Common\DataFixtures\DependentFixtureInterface;
use App\Entity\Deviseur\ContratWorkflowEvent;

class ContratWorkflowEventFixtures extends Fixture implements DependentFixtureInterface
{
    public function load(ObjectManager $manager)
    {
        $event1 = new ContratWorkflowEvent();
        $event1->setAuthor($this->getReference('user-adrien'));
        $event1->setContrat($this->getReference('contrat'));
        $event1->setContratWorkflow($this->getReference('contrat-workflow-simulation'));
        $event1->setEtat(true);
        $manager->persist($event1);

        $event2 = new ContratWorkflowEvent();
        $event2->setAuthor($this->getReference('user-adrien'));
        $event2->setContrat($this->getReference('contrat'));
        $event2->setContratWorkflow($this->getReference('contrat-workflow-simulation'));
        $event2->setEtat(false);
        $manager->persist($event2);

        $manager->flush();

        // Références
        $this->addReference('contrat-workflow-event-1', $event1);
        $this->addReference('contrat-workflow-event-2', $event2);
    }

    public function getDependencies()
    {
        return array(
            ContratFixtures::class,
            ContratWorkflowFixtures::class,
        );
    }
}
