<?php
namespace App\Tests\Entity\Deviseur;

use App\Tests\FixtureAwareTestCase;
use Doctrine\ORM\EntityManager;

use App\Entity\Deviseur\ConditionPaiementFacturation;
use App\DataFixtures\Deviseur\ConditionPaiementFacturationFixtures;

class ConditionPaiementFacturationTest extends FixtureAwareTestCase
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
        $this->addFixture(new ConditionPaiementFacturationFixtures());
        $this->executeFixtures();
        $kernel = static::bootKernel();
        // Lets get the entityManager from the container
        $this->entityManager = $kernel->getContainer()->get('doctrine')->getManager();
        $this->repository = $this->entityManager->getRepository(ConditionPaiementFacturation::class);
    }

    public function testToString() {
        fwrite(STDOUT, "\n" . __METHOD__ . "\t");

        $conditions_paiement_facturation = $this->repository->findAll();
        foreach($conditions_paiement_facturation as $condition_paiement_facturation){
            $this->assertEquals($condition_paiement_facturation->getLabel(), $condition_paiement_facturation);
        }
    }

}