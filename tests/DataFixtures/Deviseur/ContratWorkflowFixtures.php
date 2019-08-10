<?php

namespace App\Tests\DataFixtures\Deviseur;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;
use App\Entity\Deviseur\ContratWorkflow;

class ContratWorkflowFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
        $simulation = new ContratWorkflow();
        $simulation->setLabel("Simulation");
        $simulation->setLabelBefore("Envoyer pour validation");
        $simulation->setLabelAfter("Envoyé");
        $simulation->setWeight(1);
        $simulation->setValidationChef(0);
        $simulation->addRole("ROLE_IPTIS_COMMERCIAL");
        $simulation->addRole("ROLE_IPTIS_CHEF");
        $manager->persist($simulation);
        
        $validation = new ContratWorkflow();
        $validation->setLabel("Validation technique");
        $validation->setLabelBefore("Valider ce contrat");
        $validation->setLabelAfter("Validée");
        $validation->setWeight(2);
        $validation->setValidationChef(1);
        $validation->addRole("ROLE_IPTIS_CHEF");
        $manager->persist($validation);

        $envoie = new ContratWorkflow();
        $envoie->setLabel("Envoyé au client");
        $envoie->setLabelBefore("Signaler comme envoyé");
        $envoie->setLabelAfter("Envoyé");
        $envoie->setWeight(3);
        $envoie->setValidationChef(0);
        $envoie->addRole("ROLE_IPTIS_COMMERCIAL");
        $envoie->addRole("ROLE_IPTIS_CHEF");
        $manager->persist($envoie);
        
        $archive = new ContratWorkflow();
        $archive->setLabel("Archive");
        $archive->setLabelBefore("Archiver ce contrat");
        $archive->setLabelAfter("Archivée");
        $archive->setWeight(4);
        $archive->setValidationChef(0);
        $archive->addRole("ROLE_IPTIS_COMMERCIAL");
        $archive->addRole("ROLE_IPTIS_CHEF");
        $manager->persist($archive);

        // Références
        $this->addReference('contrat-workflow-simulation', $simulation);
        $this->addReference('contrat-workflow-validation', $validation);
        $this->addReference('contrat-workflow-envoie', $envoie);
        $this->addReference('contrat-workflow-archive', $archive);

        $manager->flush();
    }
}
