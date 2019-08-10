<?php
namespace App\Tests\Entity\Deviseur;

use App\Tests\FixtureAwareTestCase;
use Doctrine\ORM\EntityManager;

use App\Entity\Deviseur\ContratWorkflow;
use App\DataFixtures\Deviseur\ContratWorkflowFixtures;

class ContratWorkflowTest extends FixtureAwareTestCase
{
    /**
     * @var EntityManager
     */
    private $entityManager;

    /**
     * @var repository
     */
    private $repository;

    protected function setUp()
    {
        parent::setUp();
        $this->addFixture(new ContratWorkflowFixtures());
        $this->executeFixtures();
        $kernel = static::bootKernel();
        // Lets get the entityManager from the container
        $this->entityManager = $kernel->getContainer()->get('doctrine')->getManager();
        $this->repository = $this->entityManager->getRepository(ContratWorkflow::class);
    }

    public function testToString() {
        fwrite(STDOUT, "\n" . __METHOD__ . "\t");

        $contrat_workflows = $this->repository->findAll();
        foreach($contrat_workflows as $contrat_workflow){
            $this->assertEquals($contrat_workflow->getLabel(), $contrat_workflow);
        }
    }

}