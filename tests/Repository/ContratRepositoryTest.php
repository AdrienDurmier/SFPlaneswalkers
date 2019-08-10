<?php

namespace App\Tests\Repository;

use App\Tests\FixtureAwareTestCase;
use Doctrine\ORM\EntityManager;

use App\Entity\Deviseur\Contrat;
use App\Tests\DataFixtures\Deviseur\ContratFixtures;

class ContratRepositoryTest extends FixtureAwareTestCase
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
        $this->addFixture(new ContratFixtures());
        $this->executeFixtures();
        $kernel = static::bootKernel();
        // Lets get the entityManager from the container
        $this->entityManager = $kernel->getContainer()->get('doctrine')->getManager();
        $this->contratRepository = $this->entityManager->getRepository(Contrat::class);
    }

    /**
     * Scénario : il y a un seul contrat updated il y a 3 jours
     */
    public function testSearchContrat(): void
    {
        fwrite(STDOUT, "\n" . __METHOD__ . "\t");

        $date5 = strtotime("-5 days");
        $date4 = strtotime("-4 days");
        $date2 = strtotime("-2 days");
        $date1 = strtotime("-1 days");

        // Test sans filtres
        $contrats = $this->contratRepository->searchContrat();
        $this->assertEquals(1, count($contrats));

        // Test avec un contrat avant la période recherchée
        $filtres = [
            'date_debut'    => date('Y-m-d 00:00:00',$date5),
            'date_fin'      => date('Y-m-d 23:59:59',$date4),
        ];
        $contrats = $this->contratRepository->searchContrat($filtres);
        $this->assertEquals(0, count($contrats));

        // Test avec un contrat pendant la période recherchée
        $filtres = [
            'date_debut'    => date('Y-m-d 00:00:00',$date4),
            'date_fin'      => date('Y-m-d 23:59:59',$date2),
        ];
        $contrats = $this->contratRepository->searchContrat($filtres);
        $this->assertEquals(1, count($contrats));

        // Test avec un contrat après la période recherchée
        $filtres = [
            'date_debut'    => date('Y-m-d 00:00:00',$date2),
            'date_fin'      => date('Y-m-d 23:59:59',$date1),
        ];
        $contrats = $this->contratRepository->searchContrat($filtres);
        $this->assertEquals(0, count($contrats));
    }

}