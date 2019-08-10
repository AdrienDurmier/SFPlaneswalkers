<?php
namespace App\Tests\Entity\Deviseur;

use App\Tests\FixtureAwareTestCase;
use Doctrine\ORM\EntityManager;

use App\Entity\Deviseur\FeuilleCategorie;
use App\DataFixtures\Deviseur\FeuilleCategorieFixtures;

class FeuilleCategorieTest extends FixtureAwareTestCase
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
        $this->addFixture(new FeuilleCategorieFixtures());
        $this->executeFixtures();
        $kernel = static::bootKernel();
        // Lets get the entityManager from the container
        $this->entityManager = $kernel->getContainer()->get('doctrine')->getManager();
        $this->repository = $this->entityManager->getRepository(FeuilleCategorie::class);
    }

    public function testToString() {
        fwrite(STDOUT, "\n" . __METHOD__ . "\t");

        $feuille_categories = $this->repository->findAll();
        foreach($feuille_categories as $feuille_categorie){
            $this->assertEquals($feuille_categorie->getLabel(), $feuille_categorie);
        }
    }

}