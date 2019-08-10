<?php
namespace App\Tests\Entity\Deviseur;

use App\Tests\FixtureAwareTestCase;
use Doctrine\ORM\EntityManager;

use App\Entity\Deviseur\ConditionPaiementModaliteReglement;
use App\DataFixtures\Deviseur\ConditionPaiementModaliteReglementFixtures;

class ConditionPaiementmodalite_reglementTest extends FixtureAwareTestCase
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
        $this->addFixture(new ConditionPaiementModaliteReglementFixtures());
        $this->executeFixtures();
        $kernel = static::bootKernel();
        // Lets get the entityManager from the container
        $this->entityManager = $kernel->getContainer()->get('doctrine')->getManager();
        $this->repository = $this->entityManager->getRepository(ConditionPaiementModaliteReglement::class);
    }

    public function testToString() {
        fwrite(STDOUT, "\n" . __METHOD__ . "\t");

        $conditions_paiement_modalite_reglement = $this->repository->findAll();
        foreach($conditions_paiement_modalite_reglement as $condition_paiement_modalite_reglement){
            $this->assertEquals($condition_paiement_modalite_reglement->getLabel(), $condition_paiement_modalite_reglement);
        }
    }

}