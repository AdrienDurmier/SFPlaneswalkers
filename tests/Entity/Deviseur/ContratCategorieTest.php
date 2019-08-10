<?php
namespace App\Tests\Entity\Deviseur;

use App\Tests\FixtureAwareTestCase;
use Doctrine\ORM\EntityManager;

use App\Entity\Deviseur\ContratCategorie;
use App\DataFixtures\Deviseur\ContratCategorieFixtures;

class ContratCategorieTest extends FixtureAwareTestCase
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
        $this->addFixture(new ContratCategorieFixtures());
        $this->executeFixtures();
        $kernel = static::bootKernel();
        // Lets get the entityManager from the container
        $this->entityManager = $kernel->getContainer()->get('doctrine')->getManager();
        $this->repository = $this->entityManager->getRepository(ContratCategorie::class);
    }

    public function testToString() {
        fwrite(STDOUT, "\n" . __METHOD__ . "\t");

        $contrat_categories = $this->repository->findAll();
        foreach($contrat_categories as $contrat_categorie){
            $this->assertEquals($contrat_categorie->getLabel(), $contrat_categorie);
        }
    }

}