<?php
namespace App\Tests\Entity\Deviseur;

use App\Tests\FixtureAwareTestCase;
use Doctrine\ORM\EntityManager;

use App\Entity\Deviseur\DureeEngagement;
use App\DataFixtures\Deviseur\DureeEngagementFixtures;

class DureeEngagementTest extends FixtureAwareTestCase
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
        $this->addFixture(new DureeEngagementFixtures());
        $this->executeFixtures();
        $kernel = static::bootKernel();
        // Lets get the entityManager from the container
        $this->entityManager = $kernel->getContainer()->get('doctrine')->getManager();
        $this->repository = $this->entityManager->getRepository(DureeEngagement::class);
    }

    public function testToString() {
        fwrite(STDOUT, "\n" . __METHOD__ . "\t");

        $duree_engagements = $this->repository->findAll();
        foreach($duree_engagements as $duree_engagement){
            $this->assertEquals($duree_engagement->getLabel(), $duree_engagement);
        }
    }

}