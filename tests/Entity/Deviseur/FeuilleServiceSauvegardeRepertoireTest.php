<?php
namespace App\Tests\Entity\Deviseur;

use App\Tests\FixtureAwareTestCase;
use Doctrine\ORM\EntityManager;

use App\Entity\Deviseur\FeuilleServiceSauvegardeRepertoire;
use App\Tests\DataFixtures\Deviseur\FeuilleServiceSauvegardeRepertoireFixtures;

class FeuilleServiceSauvegardeRepertoireTest extends FixtureAwareTestCase
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
        $this->addFixture(new FeuilleServiceSauvegardeRepertoireFixtures());
        $this->executeFixtures();
        $kernel = static::bootKernel();
        // Lets get the entityManager from the container
        $this->entityManager = $kernel->getContainer()->get('doctrine')->getManager();
        $this->repository = $this->entityManager->getRepository(FeuilleServiceSauvegardeRepertoire::class);
    }

    public function testToString() {
        fwrite(STDOUT, "\n" . __METHOD__ . "\t");

        $repertoires = $this->repository->findAll();
        foreach($repertoires as $repertoire){
            $this->assertEquals($repertoire->getLabel(), $repertoire);
        }
    }

}