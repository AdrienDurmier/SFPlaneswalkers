<?php
namespace App\Tests\Entity\Deviseur;

use PHPUnit\Framework\TestCase;
use App\Entity\Deviseur\FeuilleService;
use App\Entity\Deviseur\FeuilleServiceVoix;
use App\Entity\Deviseur\FeuilleServiceIAAS;
use App\Entity\Deviseur\Ligne;
use App\Entity\Deviseur\Contrat;

class ContratServiceTest extends TestCase
{
    public function testGetTotal()
    {
        fwrite(STDOUT, "\n" . __METHOD__ . "\t");

        $ligne1 = new Ligne();
        $ligne1->setQuantite(2);
        $ligne1->setPrix(495.12);

        $ligne2 = new Ligne();
        $ligne2->setQuantite(5);
        $ligne2->setPrix(14.52);

        $ligne3 = new Ligne();
        $ligne3->setQuantite(23);
        $ligne3->setPrix(6.58);
        
        $feuille1 = new FeuilleServiceVoix();
        $feuille1->addLigne($ligne1);
        $feuille1->addLigne($ligne2);

        $feuille2 = new FeuilleServiceIAAS();
        $feuille2->addLigne($ligne3);

        $contrat = new Contrat();
        $contrat->addFeuille($feuille1);
        $contrat->addFeuille($feuille2);

        $result = $contrat->getTotal();
        $this->assertEquals(1214.18, $result);
    }

}