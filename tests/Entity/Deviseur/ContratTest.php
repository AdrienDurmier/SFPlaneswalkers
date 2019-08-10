<?php
namespace App\Tests\Entity\Deviseur;

use App\Tests\FixtureAwareTestCase;
use Doctrine\ORM\EntityManager;

use App\Entity\Deviseur\Contrat;
use App\Tests\DataFixtures\Deviseur\ContratFixturesCheckEntity;

class ContratTest extends FixtureAwareTestCase
{
    /**
     * @var EntityManager
     */
    private $entityManager;

    /**
     * @var ContratRepository
     */
    private $contratRepository;

    protected function setUp()
    {
        parent::setUp();
        $this->addFixture(new ContratFixturesCheckEntity());
        $this->executeFixtures();
        $kernel = static::bootKernel();
        // Lets get the entityManager from the container
        $this->entityManager = $kernel->getContainer()->get('doctrine')->getManager();
        $this->contratRepository = $this->entityManager->getRepository(Contrat::class);
    }

    public function testConstruct() {
        fwrite(STDOUT, "\n" . __METHOD__ . "\t");

        $contrat = new Contrat();
        $this->assertNotNull($contrat->getCreated());
        $this->assertNotNull($contrat->getUpdated());
    }

    /**
     * Test de la méthode getTotal()
     */
    public function testGetTotal() {
        fwrite(STDOUT, "\n" . __METHOD__ . "\t");

        $contrats = $this->contratRepository->findAll();
        foreach($contrats as $contrat){
            $result_entity = $contrat->getTotal();
            $result_test = 0;
            foreach($contrat->getFeuilles() as $feuille){
                $result_test += $feuille->getTotal();
            }
            $this->assertEquals($result_test, $result_entity);
        }
    }

    /**
     * Test de la méthode getTotalMiseEnLigne()
     */
    public function testGetTotalMiseEnService() {
        fwrite(STDOUT, "\n" . __METHOD__ . "\t");

        $contrats = $this->contratRepository->findAll();
        foreach($contrats as $contrat){
            $result_entity = $contrat->getTotalMiseEnLigne();
            $result_test = 0;
            foreach($contrat->getFeuilles() as $feuille){
                $result_test += $feuille->getTotalMiseEnService();
            }
            $this->assertEquals($result_test, $result_entity);
        }
    }

}