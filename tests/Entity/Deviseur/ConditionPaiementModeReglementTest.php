<?php
namespace App\Tests\Entity\Deviseur;

use App\Tests\FixtureAwareTestCase;
use Doctrine\ORM\EntityManager;

use App\Entity\Deviseur\ConditionPaiementModeReglement;
use App\DataFixtures\Deviseur\ConditionPaiementModeReglementFixtures;

class ConditionPaiementModeReglementTest extends FixtureAwareTestCase
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
        $this->addFixture(new ConditionPaiementModeReglementFixtures());
        $this->executeFixtures();
        $kernel = static::bootKernel();
        // Lets get the entityManager from the container
        $this->entityManager = $kernel->getContainer()->get('doctrine')->getManager();
        $this->repository = $this->entityManager->getRepository(ConditionPaiementModeReglement::class);
    }

    public function testToString() {
        fwrite(STDOUT, "\n" . __METHOD__ . "\t");

        $conditions_paiement_mode_reglement = $this->repository->findAll();
        foreach($conditions_paiement_mode_reglement as $condition_paiement_mode_reglement){
            $this->assertEquals($condition_paiement_mode_reglement->getLabel(), $condition_paiement_mode_reglement);
        }
    }

}