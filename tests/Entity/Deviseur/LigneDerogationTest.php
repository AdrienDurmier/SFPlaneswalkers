<?php
namespace App\Tests\Entity\Deviseur;

use App\Tests\FixtureAwareTestCase;
use Doctrine\ORM\EntityManager;
use App\Tests\DataFixtures\Deviseur\LigneDerogationFixtures;

use App\Entity\Deviseur\LigneDerogation;

class LigneDerogationTest extends FixtureAwareTestCase
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
        $this->addFixture(new LigneDerogationFixtures());
        $this->executeFixtures();
        $kernel = static::bootKernel();
        // Lets get the entityManager from the container
        $this->entityManager = $kernel->getContainer()->get('doctrine')->getManager();
        $this->repository = $this->entityManager->getRepository(LigneDerogation::class);
    }

    public function testToString() {
        fwrite(STDOUT, "\n" . __METHOD__ . "\t");

        $derogations = $this->repository->findAll();
        foreach($derogations as $derogation){
            if($derogation->getAccordEtat() !== null){
                if($derogation->getAccordEtat()){
                    $this->assertEquals("Dérogation validée", $derogation);
                }else{
                    $this->assertEquals("Dérogation refusée", $derogation);
                }
            }else{
                $this->assertEquals("Dérogation en attente", $derogation);
            }

        }
    }

}