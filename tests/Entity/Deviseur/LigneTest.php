<?php
namespace App\Tests\Entity\Deviseur;

use App\Tests\FixtureAwareTestCase;
use Doctrine\ORM\EntityManager;

use App\Entity\Deviseur\LigneXDSL;
use App\Entity\Deviseur\Ligne;
use App\Tests\DataFixtures\Deviseur\ContratFixturesCheckEntity;

class LigneTest extends  FixtureAwareTestCase
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
        $this->addFixture(new ContratFixturesCheckEntity());
        $this->executeFixtures();
        $kernel = static::bootKernel();
        // Lets get the entityManager from the container
        $this->entityManager = $kernel->getContainer()->get('doctrine')->getManager();
        $this->repository = $this->entityManager->getRepository(Ligne::class);
    }

    /**
     * @dataProvider providerGetTotalLigne
     */
    public function testGetTotalLigne($quantite, $prix, $total_ligne)
    {
        fwrite(STDOUT, "\n" . __METHOD__ . "\t");

        $ligne = new LigneXDSL();
        $ligne->setQuantite($quantite);
        $ligne->setPrix($prix);
        $result = $ligne->getTotalLigne();
        $this->assertEquals($total_ligne, $result);
    }
    public function providerGetTotalLigne()
    {
        return [
            [0, 0, 0], // quantite, prix, quantite * prix
            [4, 25.00, 100.00],
            [2, 78.93, 157.86],
            [100, 1234, 123400]
        ];
    }

    public function testGetMargePrixOriginal(){
        fwrite(STDOUT, "\n" . __METHOD__ . "\t");

        $lignes = $this->repository->findAll();
        foreach($lignes as $ligne){
            $result_test = (1 - $ligne->getPrix() / $ligne->getService()->getPrix()) * 100;
            $result_entity = $ligne->getMargePrixOriginal();
            $this->assertEquals($result_entity, number_format($result_test));
        }
    }

}