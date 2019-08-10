<?php

namespace App\Tests\DataFixtures\Deviseur;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;
use Doctrine\Common\DataFixtures\DependentFixtureInterface;

use App\Entity\Deviseur\Contrat;
use App\Entity\Deviseur\FeuilleServiceVoix;
use App\Entity\Deviseur\LigneVoixEstimation;
use App\Tests\DataFixtures\UserFixtures;

class LigneVoixEstimationFixtures extends Fixture implements DependentFixtureInterface
{
    public function load(ObjectManager $manager)
    {
        // Utils
        $dateTime = new \DateTime();

        // Contrat
        $contrat = new Contrat();
        $contrat->setAuthor($this->getReference('user-adrien'));
        $contrat->setCreated($dateTime->modify('-10 day'));
        $contrat->setUpdated($dateTime->modify('-3 day'));
        $manager->persist($contrat);

        // Feuille XDSL
        $feuille_voix = new FeuilleServiceVoix();
        $feuille_voix->setContrat($contrat);
        $feuille_voix->setDureeEngagement($this->getReference('fas-36mois'));
        $feuille_voix->setFeuilleCategorie($this->getReference('contrat-categorie-voix'));
        $manager->persist($feuille_voix);
        $manager->flush();

        // Estimations
        $ligne_estimation_1 = new LigneVoixEstimation();
        $ligne_estimation_1->setDuree(241.98);
        $ligne_estimation_1->setEstimation($this->getReference('voix-estimation-1'));
        $ligne_estimation_1->setFeuille($feuille_voix);
        $manager->persist($ligne_estimation_1);

        $ligne_estimation_2 = new LigneVoixEstimation();
        $ligne_estimation_2->setDuree(18.44);
        $ligne_estimation_2->setEstimation($this->getReference('voix-estimation-2'));
        $ligne_estimation_2->setFeuille($feuille_voix);
        $manager->persist($ligne_estimation_2);

        $ligne_estimation_3 = new LigneVoixEstimation();
        $ligne_estimation_3->setDuree(49.12);
        $ligne_estimation_3->setEstimation($this->getReference('voix-estimation-3'));
        $ligne_estimation_3->setFeuille($feuille_voix);
        $manager->persist($ligne_estimation_3);

        $ligne_estimation_4 = new LigneVoixEstimation();
        $ligne_estimation_4->setDuree(0.87);
        $ligne_estimation_4->setEstimation($this->getReference('voix-estimation-4'));
        $ligne_estimation_4->setFeuille($feuille_voix);
        $manager->persist($ligne_estimation_4);

        $ligne_estimation_5 = new LigneVoixEstimation();
        $ligne_estimation_5->setDuree(9.74);
        $ligne_estimation_5->setEstimation($this->getReference('voix-estimation-5'));
        $ligne_estimation_5->setFeuille($feuille_voix);
        $manager->persist($ligne_estimation_5);

        $manager->flush();
    }

    public function getDependencies()
    {
        return array(
            UserFixtures::class,
            ServiceFixtures::class,
            VoixEstimationFixtures::class,
        );
    }
}
