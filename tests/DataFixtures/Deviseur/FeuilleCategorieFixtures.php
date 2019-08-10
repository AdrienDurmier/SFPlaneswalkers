<?php

namespace App\Tests\DataFixtures\Deviseur;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;
use App\Entity\Deviseur\FeuilleCategorie;
use App\DataFixtures\Deviseur\DureeEngagement;
use Doctrine\Common\DataFixtures\DependentFixtureInterface;

class FeuilleCategorieFixtures extends Fixture implements DependentFixtureInterface
{
    public function load(ObjectManager $manager)
    {
        $entity1 = new FeuilleCategorie();
        $entity1->setIdAmedia("adsl-vdsl");
        $entity1->setLabel("ADSL-VDSL");
        $entity1->setPictoFontAwesome("ethernet");
        $entity1->addDureeEngagement($this->getReference('fas-36mois'));
        $entity1->addDureeEngagement($this->getReference('fas-60mois'));
        $entity1->setInformations("<ul><li>Débit non garanti</li><li>Pas de GTR</li><li>Création de ligne soumise à la présence d'une paire de cuivre</li><li>En dégroupage total prévoir un filtre ADSL</li><li>Desserte interne non comprise (à la charge du client)</li>");
        $entity1->setRemarquesDefault("Les frais de facturation sont facturés à part (sur un devis)");
        $entity1->setMentionsLegales("Le contrat est réputé conclu à partir du moment où le prestataire signe le présent bon de commande dûment rempli et signé par les deux parties. La date de début d'engagement est établie à compter de la première facture. La facturation démarre à la date de livraison du service par l'opérateur historique à Amedia Solutions. En signant ce bon de commande, le client certifie avoir pris connaissance des conditions générales de vente disponible sur https://www.amediasolutions.fr/cgv, avec le Mot de passe : CGV@2018<br>Toute mention manuscrite (en dehors du pavé signature) est interdite, elle n'a donc aucune valeur légale.");
        $entity1->setDisplayMiseEnService(true);
        $manager->persist($entity1);
        
        $entity2 = new FeuilleCategorie();
        $entity2->setIdAmedia("fibre-l2l");
        $entity2->setLabel("Fibre L2L");
        $entity2->setPictoFontAwesome("lightbulb");
        $entity2->addDureeEngagement($this->getReference('fas-36mois'));
        $entity2->addDureeEngagement($this->getReference('fas-60mois'));
        $entity2->setInformations("<ul><li>Débit symétrique 100% garanti</li><li>Fourniture et maintenance du service inclus</li><li>Indisponibilité du service de 13h/an maximum</li><li>GTR 4h : du lundi au vendredi de 8h à 18h</li><li>Desserte interne non comprise (à la charge du client)</li>");
        $entity2->setRemarquesDefault("Les frais de facturation sont facturés à part (sur un devis)");
        $entity2->setMentionsLegales("Le contrat est réputé conclu à partir du moment où le prestataire signe le présent bon de commande dûment rempli et signé par les deux parties. La date de début d'engagement est établie à compter de la première facture. La facturation démarre à la date de livraison du service par l'opérateur historique à Amedia Solutions. En signant ce bon de commande, le client certifie avoir pris connaissance des conditions générales de vente disponible sur https://www.amediasolutions.fr/cgv, avec le Mot de passe : CGV@2018<br>Toute mention manuscrite (en dehors du pavé signature) est interdite, elle n'a donc aucune valeur légale.");
        $entity2->setDisplayMiseEnService(true);
        $manager->persist($entity2);
        
        $entity3 = new FeuilleCategorie();
        $entity3->setIdAmedia("voix");
        $entity3->setLabel("Voix");
        $entity3->setPictoFontAwesome("phone-volume");
        $entity3->addDureeEngagement($this->getReference('fas-12mois'));
        $entity3->addDureeEngagement($this->getReference('fas-36mois'));
        $entity3->addDureeEngagement($this->getReference('fas-60mois'));
        $entity3->setMentionsLegales("Le contrat est réputé conclu à partir du moment où le prestataire signe le présent bon de commande dûment rempli et signé par les deux parties. La date de début d'engagement est établie à compter de la première facture. En signant ce bon de commande, le client certifie avoir pris connaissance des conditions générales de vente disponible sur « https://www.amediasolutions.fr/cgv », avec le Mot de passe « CGV@2018 »<br>Toute mention manuscrite et/ou reture (en dehors du pavé signature) est interdite, elle n'a donc aucune valeur légale.");
        $entity3->setDisplayMiseEnService(true);
        $manager->persist($entity3);
        
        $entity4 = new FeuilleCategorie();
        $entity4->setIdAmedia("cloud");
        $entity4->setLabel("Cloud");
        $entity4->setPictoFontAwesome("cloud");
        $entity4->addDureeEngagement($this->getReference('fas-12mois'));
        $entity4->addDureeEngagement($this->getReference('fas-36mois'));
        $entity4->addDureeEngagement($this->getReference('fas-60mois'));
        $entity4->setMentionsLegales("Le contrat est réputé conclu à partir du moment où le prestataire signe le présent bon de commande dûment rempli et signé par les deux parties. La date de début d'engagement est établie à compter de la première facture. En signant ce bon de commande, le client certifie avoir pris connaissance des conditions générales de vente disponible sur « https://www.amediasolutions.fr/cgv », avec le Mot de passe « CGV@2018 »<br>Toute mention manuscrite et/ou reture (en dehors du pavé signature) est interdite, elle n'a donc aucune valeur légale.");
        $entity4->setDisplayMiseEnService(false);
        $manager->persist($entity4);
        
        $entity5 = new FeuilleCategorie();
        $entity5->setIdAmedia("iaas");
        $entity5->setLabel("IAAS");
        $entity5->setPictoFontAwesome("network-wired");
        $entity5->addDureeEngagement($this->getReference('fas-12mois'));
        $entity5->addDureeEngagement($this->getReference('fas-36mois'));
        $entity5->addDureeEngagement($this->getReference('fas-60mois'));
        $entity5->setRemarquesDefault("*Si le client gère en autonomie son AD, la responsabilité d'AMEDIA sera désengagée et la sécurité des données ne saura plus être assurée par nos soins. Toutefois  sur devis, une prestation d'accompagnement pourra toujours être envisagée.");
        $entity5->setMentionsLegales("Le contrat est réputé conclu à partir du moment où le prestataire signe le présent bon de commande dûment rempli et signé par les deux parties. La date de début d'engagement est établie à compter de la première facture. En signant ce bon de commande, le client certifie avoir pris connaissance des conditions générales de vente disponible sur « https://www.amediasolutions.fr/cgv », avec le Mot de passe « CGV@2018 »<br>Toute mention manuscrite et/ou reture (en dehors du pavé signature) est interdite, elle n'a donc aucune valeur légale.");
        $entity5->setDisplayMiseEnService(false);
        $manager->persist($entity5);
        
        $entity6 = new FeuilleCategorie();
        $entity6->setIdAmedia("sauvegarde");
        $entity6->setLabel("Sauvegarde");
        $entity6->setPictoFontAwesome("cloud-upload-alt");
        $entity6->addDureeEngagement($this->getReference('fas-12mois'));
        $entity6->addDureeEngagement($this->getReference('fas-36mois'));
        $entity6->addDureeEngagement($this->getReference('fas-60mois'));
        $entity6->setConditionsPaiementRenouvellement(true);
        $entity6->setMentionsLegales("Le contrat est réputé conclu à partir du moment où le prestataire signe le présent bon de commande dûment rempli et signé par les deux parties. La date de début d'engagement est établie à compter de la première facture. En signant ce bon de commande, le client certifie avoir pris connaissance des conditions générales de vente disponible sur « https://www.amediasolutions.fr/cgv », avec le Mot de passe « CGV@2018 »<br>Toute mention manuscrite et/ou reture (en dehors du pavé signature) est interdite, elle n'a donc aucune valeur légale.");
        $entity6->setDisplayMiseEnService(true);
        $manager->persist($entity6);
        
        $entity7 = new FeuilleCategorie();
        $entity7->setIdAmedia("maintenance");
        $entity7->setLabel("Maintenance");
        $entity7->setPictoFontAwesome("headphones");
        $entity7->addDureeEngagement($this->getReference('fas-12mois'));
        $entity7->addDureeEngagement($this->getReference('fas-36mois'));
        $entity7->addDureeEngagement($this->getReference('fas-60mois'));
        $entity7->setRemarquesDefault("(1) sous réserve que le serveur soit au minimum sous Windows 2008 R2, avec un système de sauvegarde type NAS ou sauvegarde externalisée ou tout autre logiciel payant de supervision de sauvegarde.<br>(2) l'accompagnement sera possible sous réserve d'une assistance de l'éditeur, notre rôle se limite à être l'intermédiaire entre le client et l'éditeur pour exécuter des tâches précises.<br>(3) si le client n'a pas de contrat de maintenance, le prêt d'un lecteur peut s'envisager de 2 manières :<br>- soit le client amène chez Amedia le lecteur défectueux et récupère le lecteur de prêt en contrepartie d'un forfait de 80,00 € HT ;<br>- soit un technicien Amedia se déplace chez le client pour récupérer le lecteur défectueux et paramétrer le lecteur de prêt. Dès la réparation effectuée, le technicien Amedia repassera chez le client pour y livrer le lecteur et récupérer celui de prêt. L'intervention sera alors facturée 160,00 € HT.<br>(4) le remplacement du téléphone est pris en charge, sauf si le téléphone a un choc apparent (écran cassé, coins abimés, rayures, combiné cassé, etc.).<br>(5) hors changement de configuration.<br>(6) Sous réserve d'avoir fait l'acquisition d'un boitier de supervision");
        $entity7->setMentionsLegales("Le contrat est réputé conclu à partir du moment où le prestataire signe le présent bon de commande dûment rempli et signé par les deux parties. La date de début d'engagement est établie à compter de la première facture. En signant ce bon de commande, le client certifie avoir pris connaissance des conditions générales de vente disponible sur « https://www.amediasolutions.fr/cgv », avec le Mot de passe « CGV@2018 »<br>Toute mention manuscrite et/ou reture (en dehors du pavé signature) est interdite, elle n'a donc aucune valeur légale.");
        $entity7->setDisplayMiseEnService(false);
        $manager->persist($entity7);
        
        $manager->flush();

        $this->addReference('contrat-categorie-adsl-vdsl', $entity1);
        $this->addReference('contrat-categorie-fibre-l2l', $entity2);
        $this->addReference('contrat-categorie-voix', $entity3);
        $this->addReference('contrat-categorie-cloud', $entity4);
        $this->addReference('contrat-categorie-iaas', $entity5);
        $this->addReference('contrat-categorie-sauvegarde', $entity6);
        $this->addReference('contrat-categorie-maintenance', $entity7);
    }

    public function getDependencies()
    {
        return array(
            DureeEngagementFixtures::class,
        );
    }
}
