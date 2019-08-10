<?php
namespace App\Tests\Entity\Deviseur;

use App\Tests\FixtureAwareTestCase;
use Doctrine\ORM\EntityManager;

use App\Entity\Deviseur\LigneVoixEstimation;
use App\Tests\DataFixtures\Deviseur\LigneVoixEstimationFixtures;

class LigneVoixEstimationTest extends FixtureAwareTestCase
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
        $this->addFixture(new LigneVoixEstimationFixtures());
        $this->executeFixtures();
        $kernel = static::bootKernel();
        // Lets get the entityManager from the container
        $this->entityManager = $kernel->getContainer()->get('doctrine')->getManager();
        $this->repository = $this->entityManager->getRepository(LigneVoixEstimation::class);
    }

    public function testGetTotalLigne() {
        fwrite(STDOUT, "\n" . __METHOD__ . "\t");

        $lignes_estimation = $this->repository->findAll();
        foreach($lignes_estimation as $ligne_estimation){
            $this->assertEquals($ligne_estimation->getTotalLigne(), $ligne_estimation->getDuree() * $ligne_estimation->getEstimation()->getPrix());
        }
    }

}