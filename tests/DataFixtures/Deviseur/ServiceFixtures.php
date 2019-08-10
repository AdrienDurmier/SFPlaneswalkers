<?php

namespace App\Tests\DataFixtures\Deviseur;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;
use Doctrine\Common\DataFixtures\DependentFixtureInterface;

use App\Entity\Deviseur\Service;

class ServiceFixtures extends Fixture implements DependentFixtureInterface
{
    public function load(ObjectManager $manager)
    {
        // Service ADSL-VDSL (XDSL)
        $service_xdsl_1 = new Service();
        $service_xdsl_1->setIdCweb("O-ADSL-DGT-F");
        $service_xdsl_1->setLabel("Lien ADSL Dégroupage total SFR (IP fixe comprise)");
        $service_xdsl_1->setLabelImpression("ADSL Dégroupage total - IPTIS (IP fixe comprise)");
        $service_xdsl_1->setPrix(39.00);
        $service_xdsl_1->setPrixFAS36mois(99.00);
        $service_xdsl_1->setPrixFAS60mois(99.00);
        $service_xdsl_1->setQuantiteMinimum(1);
        $service_xdsl_1->setQuantiteMaximum(1);
        $service_xdsl_1->setCategorie($this->getReference('service-categorie-adsl-vdsl'));
        $manager->persist($service_xdsl_1);

        $service_xdsl_2 = new Service();
        $service_xdsl_2->setIdCweb("O-ADSL-DGT-BU-F");
        $service_xdsl_2->setLabel("Lien ADSL Dégroupage total backup SFR (IP fixe comprise)");
        $service_xdsl_2->setLabelImpression("ADSL Dégroupage total backup - IPTIS (IP fixe comprise)");
        $service_xdsl_2->setPrix(36.00);
        $service_xdsl_2->setPrixFAS36mois(99.00);
        $service_xdsl_2->setPrixFAS60mois(99.00);
        $service_xdsl_2->setQuantiteMinimum(1);
        $service_xdsl_2->setQuantiteMaximum(1);
        $service_xdsl_2->setCategorie($this->getReference('service-categorie-adsl-vdsl'));
        $manager->persist($service_xdsl_2);

        $service_xdsl_3 = new Service();
        $service_xdsl_3->setIdCweb("O-ADSL-DGT-R");
        $service_xdsl_3->setLabel("Lien ADSL Dégroupage total Orange (IP fixe comprise)");
        $service_xdsl_3->setLabelImpression("ADSL Dégroupage total  - IPTIS (IP fixe comprise)");
        $service_xdsl_3->setPrix(39.00);
        $service_xdsl_3->setPrixFAS36mois(99.00);
        $service_xdsl_3->setPrixFAS60mois(99.00);
        $service_xdsl_3->setQuantiteMinimum(1);
        $service_xdsl_3->setQuantiteMaximum(1);
        $service_xdsl_3->setCategorie($this->getReference('service-categorie-adsl-vdsl'));
        $manager->persist($service_xdsl_3);
        
        $service_xdsl_4 = new Service();
        $service_xdsl_4->setIdCweb("O-ADSL-DGT-BU-R");
        $service_xdsl_4->setLabel("Lien ADSL Dégroupage total backup Orange (IP fixe comprise)");
        $service_xdsl_4->setLabelImpression("ADSL Dégroupage total backup  - IPTIS (IP fixe comprise)");
        $service_xdsl_4->setPrix(36.00);
        $service_xdsl_4->setPrixFAS36mois(99.00);
        $service_xdsl_4->setPrixFAS60mois(99.00);
        $service_xdsl_4->setQuantiteMinimum(1);
        $service_xdsl_4->setQuantiteMaximum(1);
        $service_xdsl_4->setCategorie($this->getReference('service-categorie-adsl-vdsl'));
        $manager->persist($service_xdsl_4);

        $service_xdsl_5 = new Service();
        $service_xdsl_5->setIdCweb("O-ADSL-DGP-F");
        $service_xdsl_5->setLabel("Lien ADSL Dégroupage partiel SFR (IP fixe comprise)");
        $service_xdsl_5->setLabelImpression("ADSL Dégroupage partiel - IPTIS (IP fixe comprise)");
        $service_xdsl_5->setPrix(39.00);
        $service_xdsl_5->setPrixFAS36mois(99.00);
        $service_xdsl_5->setPrixFAS60mois(99.00);
        $service_xdsl_5->setQuantiteMinimum(1);
        $service_xdsl_5->setQuantiteMaximum(1);
        $service_xdsl_5->setCategorie($this->getReference('service-categorie-adsl-vdsl'));
        $manager->persist($service_xdsl_5);

        $service_xdsl_6 = new Service();
        $service_xdsl_6->setIdCweb("O-ADSL-DGP-BU-F");
        $service_xdsl_6->setLabel("Lien ADSL Dégroupage partiel backup SFR (IP fixe comprise)");
        $service_xdsl_6->setLabelImpression("ADSL Dégroupage partiel backup - IPTIS (IP fixe comprise)");
        $service_xdsl_6->setPrix(36.00);
        $service_xdsl_6->setPrixFAS36mois(99.00);
        $service_xdsl_6->setPrixFAS60mois(99.00);
        $service_xdsl_6->setQuantiteMinimum(1);
        $service_xdsl_6->setQuantiteMaximum(1);
        $service_xdsl_6->setCategorie($this->getReference('service-categorie-adsl-vdsl'));
        $manager->persist($service_xdsl_6);

        $service_xdsl_7 = new Service();
        $service_xdsl_7->setIdCweb("O-ADSL-DGP-R");
        $service_xdsl_7->setLabel("Lien ADSL Dégroupage partiel Orange (IP fixe comprise)");
        $service_xdsl_7->setLabelImpression("ADSL Dégroupage partiel - IPTIS (IP fixe comprise)");
        $service_xdsl_7->setPrix(39.00);
        $service_xdsl_7->setPrixFAS36mois(99.00);
        $service_xdsl_7->setPrixFAS60mois(99.00);
        $service_xdsl_7->setQuantiteMinimum(1);
        $service_xdsl_7->setQuantiteMaximum(1);
        $service_xdsl_7->setCategorie($this->getReference('service-categorie-adsl-vdsl'));
        $manager->persist($service_xdsl_7);

        $service_xdsl_8 = new Service();
        $service_xdsl_8->setIdCweb("O-ADSL-DGP-BU-R");
        $service_xdsl_8->setLabel("Lien ADSL Dégroupage partiel backup Orange (IP fixe comprise)");
        $service_xdsl_8->setLabelImpression("ADSL Dégroupage partiel backup - IPTIS (IP fixe comprise)");
        $service_xdsl_8->setPrix(36.00);
        $service_xdsl_8->setPrixFAS36mois(99.00);
        $service_xdsl_8->setPrixFAS60mois(99.00);
        $service_xdsl_8->setQuantiteMinimum(1);
        $service_xdsl_8->setQuantiteMaximum(1);
        $service_xdsl_8->setCategorie($this->getReference('service-categorie-adsl-vdsl'));
        $manager->persist($service_xdsl_8);

        $service_xdsl_9 = new Service();
        $service_xdsl_9->setIdCweb("O-VDSL-DGT-R");
        $service_xdsl_9->setLabel("Lien VDSL Dégroupage total Orange");
        $service_xdsl_9->setLabelImpression("VDSL Dégroupage total - IPTIS (IP fixe comprise)");
        $service_xdsl_9->setPrix(65.00);
        $service_xdsl_9->setPrixFAS36mois(99.00);
        $service_xdsl_9->setPrixFAS60mois(99.00);
        $service_xdsl_9->setQuantiteMinimum(1);
        $service_xdsl_9->setQuantiteMaximum(1);
        $service_xdsl_9->setCategorie($this->getReference('service-categorie-adsl-vdsl'));
        $manager->persist($service_xdsl_9);

        $service_xdsl_10 = new Service();
        $service_xdsl_10->setIdCweb("O-VDSL-DGT-BU-R");
        $service_xdsl_10->setLabel("Lien VDSL Dégroupage total backup Orange");
        $service_xdsl_10->setLabelImpression("VDSL Dégroupage total backup - IPTIS (IP fixe comprise)");
        $service_xdsl_10->setPrix(60.00);
        $service_xdsl_10->setPrixFAS36mois(99.00);
        $service_xdsl_10->setPrixFAS60mois(99.00);
        $service_xdsl_10->setQuantiteMinimum(1);
        $service_xdsl_10->setQuantiteMaximum(1);
        $service_xdsl_10->setCategorie($this->getReference('service-categorie-adsl-vdsl'));
        $manager->persist($service_xdsl_10);

        $service_xdsl_11 = new Service();
        $service_xdsl_11->setIdCweb("O-VDSL-DGP-R");
        $service_xdsl_11->setLabel("Lien VDSL Dégroupage partiel Orange");
        $service_xdsl_11->setLabelImpression("VDSL Dégroupage partiel - IPTIS (IP fixe comprise)");
        $service_xdsl_11->setPrix(65.00);
        $service_xdsl_11->setPrixFAS36mois(99.00);
        $service_xdsl_11->setPrixFAS60mois(99.00);
        $service_xdsl_11->setQuantiteMinimum(1);
        $service_xdsl_11->setQuantiteMaximum(1);
        $service_xdsl_11->setCategorie($this->getReference('service-categorie-adsl-vdsl'));
        $manager->persist($service_xdsl_11);

        $service_xdsl_12 = new Service();
        $service_xdsl_12->setIdCweb("O-VDSL-DGP-BU-R");
        $service_xdsl_12->setLabel("Lien VDSL Dégroupage partiel backup Orange");
        $service_xdsl_12->setLabelImpression("VDSL Dégroupage partiel backup  - IPTIS (IP fixe comprise)");
        $service_xdsl_12->setPrix(60.00);
        $service_xdsl_12->setPrixFAS36mois(99.00);
        $service_xdsl_12->setPrixFAS60mois(99.00);
        $service_xdsl_12->setQuantiteMinimum(1);
        $service_xdsl_12->setQuantiteMaximum(1);
        $service_xdsl_12->setCategorie($this->getReference('service-categorie-adsl-vdsl'));
        $manager->persist($service_xdsl_12);

        $service_xdsl_13 = new Service();
        $service_xdsl_13->setIdCweb("ESSENTIEL-VDSL");
        $service_xdsl_13->setLabel("Pack Essentiel (Lien VDSL DT - 2 Cx - 5 SDA - 5 BAL - MAD de 1 T42/1 SF/Routeur/Câbles - Installation offerte - 36 mois)");
        $service_xdsl_13->setLabelImpression("Essentiel - Iptis ( 2 Cx + VDSL + 5 SDA + 5 BAL)");
        $service_xdsl_13->setPrix(80.00);
        $service_xdsl_13->setPrixFAS36mois(99.00);
        $service_xdsl_13->setPrixFAS60mois(99.00);
        $service_xdsl_13->setQuantiteMinimum(1);
        $service_xdsl_13->setQuantiteMaximum(1);
        $service_xdsl_13->setCategorie($this->getReference('service-categorie-adsl-vdsl'));
        $manager->persist($service_xdsl_13);

        $service_xdsl_14 = new Service();
        $service_xdsl_14->setIdCweb("ESSENTIEL-ADSL");
        $service_xdsl_14->setLabel("Pack Essentiel (Lien ADSL DT - 2 Cx - 5 SDA - 5 BAL - MAD de 1 T42/1 SF/Routeur/Câbles - Installation offerte - 36 mois)");
        $service_xdsl_14->setLabelImpression("Essentiel - Iptis ( 2 Cx + ADSL + 5 SDA + 5 BAL)");
        $service_xdsl_14->setPrix(60.00);
        $service_xdsl_14->setPrixFAS36mois(99.00);
        $service_xdsl_14->setPrixFAS60mois(99.00);
        $service_xdsl_14->setQuantiteMinimum(1);
        $service_xdsl_14->setQuantiteMaximum(1);
        $service_xdsl_14->setCategorie($this->getReference('service-categorie-adsl-vdsl'));
        $manager->persist($service_xdsl_14);

        $service_xdsl_15 = new Service();
        $service_xdsl_15->setIdCweb("C-ADRESIP");
        $service_xdsl_15->setLabel("Adresse IPV4");
        $service_xdsl_15->setPrix(2.50);
        $service_xdsl_15->setPrixFAS36mois(null);
        $service_xdsl_15->setPrixFAS60mois(null);
        $service_xdsl_15->setCategorie($this->getReference('service-categorie-adsl-vdsl-option'));
        $manager->persist($service_xdsl_15);

        $service_xdsl_16 = new Service();
        $service_xdsl_16->setIdCweb("VPN");
        $service_xdsl_16->setLabel("Option VPN Nomade en cœur de réseau (pour 1 utilisateur)");
        $service_xdsl_16->setPrix(1.50);
        $service_xdsl_16->setPrixFAS36mois(40.00);
        $service_xdsl_16->setPrixFAS60mois(40.00);
        $service_xdsl_16->setCategorie($this->getReference('service-categorie-adsl-vdsl-option'));
        $manager->persist($service_xdsl_16);

        $service_xdsl_17 = new Service();
        $service_xdsl_17->setIdCweb("CONTROLEUR-WIFI-SS");
        $service_xdsl_17->setLabel("Option contrôleur wifi sans services (Gestion multi SSID)");
        $service_xdsl_17->setPrix(20.00);
        $service_xdsl_17->setPrixFAS36mois(null);
        $service_xdsl_17->setPrixFAS60mois(null);
        $service_xdsl_17->setCategorie($this->getReference('service-categorie-adsl-vdsl-option'));
        $manager->persist($service_xdsl_17);

        $service_xdsl_18 = new Service();
        $service_xdsl_18->setIdCweb("CONTROLEUR-WIFI-AS");
        $service_xdsl_18->setLabel("Option contrôleur wifi avec services Antivirus - Web Filter & Gestion multi SSID");
        $service_xdsl_18->setPrix(45.00);
        $service_xdsl_18->setPrixFAS36mois(null);
        $service_xdsl_18->setPrixFAS60mois(null);
        $service_xdsl_18->setCategorie($this->getReference('service-categorie-adsl-vdsl-option'));
        $manager->persist($service_xdsl_18);

        // Service FIBREL2L
        $service_fibre_1 = new Service();
        $service_fibre_1->setIdCweb("C-FIBRE-FT0-10");
        $service_fibre_1->setLabel("SFR (ZT0) 10Mo (transit IP / adresses IP/Routeur compris)");
        $service_fibre_1->setLabelImpression("Fibre optique FT0 10M - Iptis (transit IP / adresses IP/Routeur compris)");
        $service_fibre_1->setPrix(490.00);
        $service_fibre_1->setPrixFAS36mois(800.00);
        $service_fibre_1->setPrixFAS60mois(800.00);
        $service_fibre_1->setCategorie($this->getReference('service-categorie-fibre-l2l'));
        $manager->persist($service_fibre_1);

        $service_fibre_2 = new Service();
        $service_fibre_2->setIdCweb("C-FIBRE-FT0-20");
        $service_fibre_2->setLabel("SFR (ZT0) 20Mo (transit IP / adresses IP/Routeur compris)");
        $service_fibre_2->setLabelImpression("Fibre optique FT0 20M - Iptis (transit IP / adresses IP/Routeur compris)");
        $service_fibre_2->setPrix(520.00);
        $service_fibre_2->setPrixFAS36mois(800.00);
        $service_fibre_2->setPrixFAS60mois(800.00);
        $service_fibre_2->setCategorie($this->getReference('service-categorie-fibre-l2l'));
        $manager->persist($service_fibre_2);

        $service_fibre_3 = new Service();
        $service_fibre_3->setIdCweb("C-FIBRE-FT0-100");
        $service_fibre_3->setLabel("SFR (ZT0) 100Mo (transit IP / adresses IP/Routeur compris)");
        $service_fibre_3->setLabelImpression("Fibre optique FT0 100M - Iptis (transit IP / adresses IP/Routeur compris)");
        $service_fibre_3->setPrix(590.00);
        $service_fibre_3->setPrixFAS36mois(800.00);
        $service_fibre_3->setPrixFAS60mois(550.00);
        $service_fibre_3->setCategorie($this->getReference('service-categorie-fibre-l2l'));
        $manager->persist($service_fibre_3);

        $service_fibre_4 = new Service();
        $service_fibre_4->setIdCweb("C-FIBRE-RT1-10");
        $service_fibre_4->setLabel("ORANGE (ZT1) O2 10Mo (transit IP / adresses IP/Routeur compris)");
        $service_fibre_4->setLabelImpression("Fibre optique RT1 10M - Iptis (transit IP / adresses IP/Routeur compris)");
        $service_fibre_4->setPrix(585.00);
        $service_fibre_4->setPrixFAS36mois(500.00);
        $service_fibre_4->setPrixFAS60mois(250.00);
        $service_fibre_4->setCategorie($this->getReference('service-categorie-fibre-l2l'));
        $manager->persist($service_fibre_4);

        $service_fibre_5 = new Service();
        $service_fibre_5->setIdCweb("C-FIBRE-RT1-20");
        $service_fibre_5->setLabel("ORANGE (ZT1) O2 20Mo (transit IP / adresses IP/Routeur compris)");
        $service_fibre_5->setLabelImpression("Fibre optique RT1 20M - Iptis (transit IP / adresses IP/Routeur compris)");
        $service_fibre_5->setPrix(660.00);
        $service_fibre_5->setPrixFAS36mois(500.00);
        $service_fibre_5->setPrixFAS60mois(250.00);
        $service_fibre_5->setCategorie($this->getReference('service-categorie-fibre-l2l'));
        $manager->persist($service_fibre_5);

        $service_fibre_6 = new Service();
        $service_fibre_6->setIdCweb("C-FIBRE-RT1-100");
        $service_fibre_6->setLabel("ORANGE (ZT1) O2 100Mo (transit IP / adresses IP/Routeur compris)");
        $service_fibre_6->setLabelImpression("Fibre optique RT1 100M - Iptis (transit IP / adresses IP/Routeur compris)");
        $service_fibre_6->setPrix(905.00);
        $service_fibre_6->setPrixFAS36mois(500.00);
        $service_fibre_6->setPrixFAS60mois(250.00);
        $service_fibre_6->setCategorie($this->getReference('service-categorie-fibre-l2l'));
        $manager->persist($service_fibre_6);

        $service_fibre_7 = new Service();
        $service_fibre_7->setIdCweb("C-FIBRE-RT3-10");
        $service_fibre_7->setLabel("ORANGE (ZT3) O3 10Mo (transit IP / adresses IP/Routeur compris)");
        $service_fibre_7->setLabelImpression("Fibre optique RT3 10M - Iptis (transit IP / adresses IP/Routeur compris)");
        $service_fibre_7->setPrix(715.00);
        $service_fibre_7->setPrixFAS36mois(500.00);
        $service_fibre_7->setPrixFAS60mois(250.00);
        $service_fibre_7->setCategorie($this->getReference('service-categorie-fibre-l2l'));
        $manager->persist($service_fibre_7);

        $service_fibre_8 = new Service();
        $service_fibre_8->setIdCweb("C-FIBRE-RT3-20");
        $service_fibre_8->setLabel("ORANGE (ZT3) O3 20Mo (transit IP / adresses IP/Routeur compris)");
        $service_fibre_8->setLabelImpression("Fibre optique RT3 20M - Iptis (transit IP / adresses IP/Routeur compris)");
        $service_fibre_8->setPrix(780.00);
        $service_fibre_8->setPrixFAS36mois(500.00);
        $service_fibre_8->setPrixFAS60mois(250.00);
        $service_fibre_8->setCategorie($this->getReference('service-categorie-fibre-l2l'));
        $manager->persist($service_fibre_8);

        $service_fibre_9 = new Service();
        $service_fibre_9->setIdCweb("C-FIBRE-RT3-100");
        $service_fibre_9->setLabel("ORANGE (ZT3) O3 100Mo (transit IP / adresses IP/Routeur compris)");
        $service_fibre_9->setLabelImpression("Fibre optique RT3 100M - Iptis (transit IP / adresses IP/Routeur compris)");
        $service_fibre_9->setPrix(1290.00);
        $service_fibre_9->setPrixFAS36mois(500.00);
        $service_fibre_9->setPrixFAS60mois(250.00);
        $service_fibre_9->setCategorie($this->getReference('service-categorie-fibre-l2l'));
        $manager->persist($service_fibre_9);

        $service_fibre_10 = new Service();
        $service_fibre_10->setIdCweb("C-FIBRE-DSP-10");
        $service_fibre_10->setLabel("AXIONE raccordé 10Mo (transit IP / adresses IP/Routeur compris)");
        $service_fibre_10->setLabelImpression("Fibre optique DSP 10M - Iptis (transit IP / adresses IP/Routeur compris)");
        $service_fibre_10->setPrix(250.00);
        $service_fibre_10->setPrixFAS36mois(650.00);
        $service_fibre_10->setPrixFAS60mois(650.00);
        $service_fibre_10->setCategorie($this->getReference('service-categorie-fibre-l2l'));
        $manager->persist($service_fibre_10);

        $service_fibre_11 = new Service();
        $service_fibre_11->setIdCweb("C-FIBRE-DSP-10");
        $service_fibre_11->setLabel("AXIONE Z0 10Mo (transit IP / adresses IP/Routeur compris)");
        $service_fibre_11->setLabelImpression("Fibre optique DSP 10M - Iptis (transit IP / adresses IP/Routeur compris)");
        $service_fibre_11->setPrix(250.00);
        $service_fibre_11->setPrixFAS36mois(800.00);
        $service_fibre_11->setPrixFAS60mois(800.00);
        $service_fibre_11->setCategorie($this->getReference('service-categorie-fibre-l2l'));
        $manager->persist($service_fibre_11);

        $service_fibre_12 = new Service();
        $service_fibre_12->setIdCweb("C-FIBRE-DSP-10");
        $service_fibre_12->setLabel("AXIONE Z1 10Mo (transit IP / adresses IP/Routeur compris)");
        $service_fibre_12->setLabelImpression("Fibre optique DSP 10M - Iptis (transit IP / adresses IP/Routeur compris)");
        $service_fibre_12->setPrix(250.00);
        $service_fibre_12->setPrixFAS36mois(2400.00);
        $service_fibre_12->setPrixFAS60mois(2400.00);
        $service_fibre_12->setCategorie($this->getReference('service-categorie-fibre-l2l'));
        $manager->persist($service_fibre_12);

        $service_fibre_13 = new Service();
        $service_fibre_13->setIdCweb("C-FIBRE-DSP-10");
        $service_fibre_13->setLabel("AXIONE Z2 10Mo (transit IP / adresses IP/Routeur compris)");
        $service_fibre_13->setLabelImpression("Fibre optique DSP 10M - Iptis (transit IP / adresses IP/Routeur compris)");
        $service_fibre_13->setPrix(250.00);
        $service_fibre_13->setPrixFAS36mois(5750.00);
        $service_fibre_13->setPrixFAS60mois(5750.00);
        $service_fibre_13->setCategorie($this->getReference('service-categorie-fibre-l2l'));
        $manager->persist($service_fibre_13);

        $service_fibre_14 = new Service();
        $service_fibre_14->setIdCweb("C-FIBRE-DSP-20");
        $service_fibre_14->setLabel("AXIONE raccordé 20Mo (transit IP / adresses IP/Routeur compris)");
        $service_fibre_14->setLabelImpression("Fibre optique DSP 20M - Iptis (transit IP / adresses IP/Routeur compris)");
        $service_fibre_14->setPrix(470.00);
        $service_fibre_14->setPrixFAS36mois(650.00);
        $service_fibre_14->setPrixFAS60mois(650.00);
        $service_fibre_14->setCategorie($this->getReference('service-categorie-fibre-l2l'));
        $manager->persist($service_fibre_14);

        $service_fibre_15 = new Service();
        $service_fibre_15->setIdCweb("C-FIBRE-DSP-20");
        $service_fibre_15->setLabel("AXIONE Z0 20Mo (transit IP / adresses IP/Routeur compris)");
        $service_fibre_15->setLabelImpression("Fibre optique DSP 20M - Iptis (transit IP / adresses IP/Routeur compris)");
        $service_fibre_15->setPrix(470.00);
        $service_fibre_15->setPrixFAS36mois(800.00);
        $service_fibre_15->setPrixFAS60mois(800.00);
        $service_fibre_15->setCategorie($this->getReference('service-categorie-fibre-l2l'));
        $manager->persist($service_fibre_15);

        $service_fibre_16 = new Service();
        $service_fibre_16->setIdCweb("C-FIBRE-DSP-20");
        $service_fibre_16->setLabel("AXIONE Z1 20Mo (transit IP / adresses IP/Routeur compris)");
        $service_fibre_16->setLabelImpression("Fibre optique DSP 20M - Iptis (transit IP / adresses IP/Routeur compris)");
        $service_fibre_16->setPrix(470.00);
        $service_fibre_16->setPrixFAS36mois(2400.00);
        $service_fibre_16->setPrixFAS60mois(2400.00);
        $service_fibre_16->setCategorie($this->getReference('service-categorie-fibre-l2l'));
        $manager->persist($service_fibre_16);

        $service_fibre_17 = new Service();
        $service_fibre_17->setIdCweb("C-FIBRE-DSP-20");
        $service_fibre_17->setLabel("AXIONE Z2 20Mo (transit IP / adresses IP/Routeur compris)");
        $service_fibre_17->setLabelImpression("Fibre optique DSP 20M - Iptis (transit IP / adresses IP/Routeur compris)");
        $service_fibre_17->setPrix(470.00);
        $service_fibre_17->setPrixFAS36mois(5750.00);
        $service_fibre_17->setPrixFAS60mois(5750.00);
        $service_fibre_17->setCategorie($this->getReference('service-categorie-fibre-l2l'));
        $manager->persist($service_fibre_17);

        $service_fibre_18 = new Service();
        $service_fibre_18->setIdCweb("C-FIBRE-DSP-50");
        $service_fibre_18->setLabel("AXIONE raccordé 50Mo (transit IP / adresses IP/Routeur compris)");
        $service_fibre_18->setLabelImpression("Fibre optique DSP 50M - Iptis (transit IP / adresses IP/Routeur compris)");
        $service_fibre_18->setPrix(507.00);
        $service_fibre_18->setPrixFAS36mois(650.00);
        $service_fibre_18->setPrixFAS60mois(650.00);
        $service_fibre_18->setCategorie($this->getReference('service-categorie-fibre-l2l'));
        $manager->persist($service_fibre_18);

        $service_fibre_19 = new Service();
        $service_fibre_19->setIdCweb("C-FIBRE-DSP-50");
        $service_fibre_19->setLabel("AXIONE Z0 50Mo (transit IP / adresses IP/Routeur compris)");
        $service_fibre_19->setLabelImpression("Fibre optique DSP 50M - Iptis (transit IP / adresses IP/Routeur compris)");
        $service_fibre_19->setPrix(507.00);
        $service_fibre_19->setPrixFAS36mois(800.00);
        $service_fibre_19->setPrixFAS60mois(800.00);
        $service_fibre_19->setCategorie($this->getReference('service-categorie-fibre-l2l'));
        $manager->persist($service_fibre_19);

        $service_fibre_20 = new Service();
        $service_fibre_20->setIdCweb("C-FIBRE-DSP-50");
        $service_fibre_20->setLabel("AXIONE Z1 50Mo (transit IP / adresses IP/Routeur compris)");
        $service_fibre_20->setLabelImpression("Fibre optique DSP 50M - Iptis (transit IP / adresses IP/Routeur compris)");
        $service_fibre_20->setPrix(507.00);
        $service_fibre_20->setPrixFAS36mois(2400.00);
        $service_fibre_20->setPrixFAS60mois(2400.00);
        $service_fibre_20->setCategorie($this->getReference('service-categorie-fibre-l2l'));
        $manager->persist($service_fibre_20);

        $service_fibre_21 = new Service();
        $service_fibre_21->setIdCweb("C-FIBRE-DSP-50");
        $service_fibre_21->setLabel("AXIONE Z2 50Mo (transit IP / adresses IP/Routeur compris)");
        $service_fibre_21->setLabelImpression("Fibre optique DSP 50M - Iptis (transit IP / adresses IP/Routeur compris)");
        $service_fibre_21->setPrix(507.00);
        $service_fibre_21->setPrixFAS36mois(5750.00);
        $service_fibre_21->setPrixFAS60mois(5750.00);
        $service_fibre_21->setCategorie($this->getReference('service-categorie-fibre-l2l'));
        $manager->persist($service_fibre_21);

        $service_fibre_22 = new Service();
        $service_fibre_22->setIdCweb("C-FIBRE-DSP-100");
        $service_fibre_22->setLabel("AXIONE raccordé 100Mo (transit IP / adresses IP/Routeur compris)");
        $service_fibre_22->setLabelImpression("Fibre optique DSP 100M - Iptis (transit IP / adresses IP/Routeur compris)");
        $service_fibre_22->setPrix(565.00);
        $service_fibre_22->setPrixFAS36mois(650.00);
        $service_fibre_22->setPrixFAS60mois(650.00);
        $service_fibre_22->setCategorie($this->getReference('service-categorie-fibre-l2l'));
        $manager->persist($service_fibre_22);

        $service_fibre_23 = new Service();
        $service_fibre_23->setIdCweb("C-FIBRE-DSP-100");
        $service_fibre_23->setLabel("AXIONE Z0 100Mo (transit IP / adresses IP/Routeur compris)");
        $service_fibre_23->setLabelImpression("Fibre optique DSP 100M - Iptis (transit IP / adresses IP/Routeur compris)");
        $service_fibre_23->setPrix(565.00);
        $service_fibre_23->setPrixFAS36mois(800.00);
        $service_fibre_23->setPrixFAS60mois(800.00);
        $service_fibre_23->setCategorie($this->getReference('service-categorie-fibre-l2l'));
        $manager->persist($service_fibre_23);

        $service_fibre_24 = new Service();
        $service_fibre_24->setIdCweb("C-FIBRE-DSP-100");
        $service_fibre_24->setLabel("AXIONE Z1 100Mo (transit IP / adresses IP/Routeur compris)");
        $service_fibre_24->setLabelImpression("Fibre optique DSP 100M - Iptis (transit IP / adresses IP/Routeur compris)");
        $service_fibre_24->setPrix(565.00);
        $service_fibre_24->setPrixFAS36mois(2400.00);
        $service_fibre_24->setPrixFAS60mois(2400.00);
        $service_fibre_24->setCategorie($this->getReference('service-categorie-fibre-l2l'));
        $manager->persist($service_fibre_24);

        $service_fibre_25 = new Service();
        $service_fibre_25->setIdCweb("C-FIBRE-DSP-100");
        $service_fibre_25->setLabel("AXIONE Z2 100Mo (transit IP / adresses IP/Routeur compris)");
        $service_fibre_25->setLabelImpression("Fibre optique DSP 100M - Iptis (transit IP / adresses IP/Routeur compris)");
        $service_fibre_25->setPrix(565.00);
        $service_fibre_25->setPrixFAS36mois(5750.00);
        $service_fibre_25->setPrixFAS60mois(5750.00);
        $service_fibre_25->setCategorie($this->getReference('service-categorie-fibre-l2l'));
        $manager->persist($service_fibre_25);

        $service_fibre_26 = new Service();
        $service_fibre_26->setIdCweb("C-SDSL-2M/1P/2P");
        $service_fibre_26->setLabel("Lien SDSL 2 Mo 1P/2P (LanToLan Niveau 2 & transit IP / adresses IP/Routeur compris)");
        $service_fibre_26->setLabelImpression("Lien SDSL 2Mo 1P/2P - Iptis (transit IP / adresses IP/Routeur compris)");
        $service_fibre_26->setPrix(97.00);
        $service_fibre_26->setPrixFAS36mois(250.00);
        $service_fibre_26->setPrixFAS60mois(null);
        $service_fibre_26->setCategorie($this->getReference('service-categorie-fibre-l2l'));
        $manager->persist($service_fibre_26);

        $service_fibre_27 = new Service();
        $service_fibre_27->setIdCweb("C-SDSL-2M/4P");
        $service_fibre_27->setLabel("Lien SDSL 2 Mo 4P (LanToLan Niveau 2 & transit IP / adresses IP/Routeur compris)");
        $service_fibre_27->setLabelImpression("Lien SDSL 2Mo 2P - Iptis (transit IP / adresses IP/Routeur compris)");
        $service_fibre_27->setPrix(160.00);
        $service_fibre_27->setPrixFAS36mois(250.00);
        $service_fibre_27->setPrixFAS60mois(null);
        $service_fibre_27->setCategorie($this->getReference('service-categorie-fibre-l2l'));
        $manager->persist($service_fibre_27);

        $service_fibre_28 = new Service();
        $service_fibre_28->setIdCweb("C-SDSL-4M/1P/2P");
        $service_fibre_28->setLabel("Lien SDSL 4 Mo 1P/2P (LanToLan Niveau 2 & transit IP / adresses IP/Routeur compris)");
        $service_fibre_28->setLabelImpression("Lien SDSL 4Mo 1P/2P - Iptis (transit IP / adresses IP/Routeur compris)");
        $service_fibre_28->setPrix(152.00);
        $service_fibre_28->setPrixFAS36mois(250.00);
        $service_fibre_28->setPrixFAS60mois(null);
        $service_fibre_28->setCategorie($this->getReference('service-categorie-fibre-l2l'));
        $manager->persist($service_fibre_28);

        $service_fibre_29 = new Service();
        $service_fibre_29->setIdCweb("C-SDSL-4M/4P");
        $service_fibre_29->setLabel("Lien SDSL 4 Mo 4P (LanToLan Niveau 2 & transit IP / adresses IP/Routeur compris)");
        $service_fibre_29->setLabelImpression("Lien SDSL 4Mo 4P - Iptis (transit IP / adresses IP/Routeur compris)");
        $service_fibre_29->setPrix(207.00);
        $service_fibre_29->setPrixFAS36mois(250.00);
        $service_fibre_29->setPrixFAS60mois(null);
        $service_fibre_29->setCategorie($this->getReference('service-categorie-fibre-l2l'));
        $manager->persist($service_fibre_29);

        $service_fibre_30 = new Service();
        $service_fibre_30->setIdCweb("C-SDSL-8M/2P");
        $service_fibre_30->setLabel("Lien SDSL 8 Mo 2P (LanToLan Niveau 2 & transit IP / adresses IP/Routeur compris)");
        $service_fibre_30->setLabelImpression("Lien SDSL 8Mo 2P - Iptis (transit IP / adresses IP/Routeur compris)");
        $service_fibre_30->setPrix(209.00);
        $service_fibre_30->setPrixFAS36mois(250.00);
        $service_fibre_30->setPrixFAS60mois(null);
        $service_fibre_30->setCategorie($this->getReference('service-categorie-fibre-l2l'));
        $manager->persist($service_fibre_30);

        $service_fibre_31 = new Service();
        $service_fibre_31->setIdCweb("C-SDSL-8M/4P");
        $service_fibre_31->setLabel("Lien SDSL 8 Mo 4P (LanToLan Niveau 2 & transit IP / adresses IP/Routeur compris)");
        $service_fibre_31->setLabelImpression("Lien SDSL 8Mo 4P - Iptis (transit IP / adresses IP/Routeur compris)");
        $service_fibre_31->setPrix(262.00);
        $service_fibre_31->setPrixFAS36mois(250.00);
        $service_fibre_31->setPrixFAS60mois(null);
        $service_fibre_31->setCategorie($this->getReference('service-categorie-fibre-l2l'));
        $manager->persist($service_fibre_31);

        $service_fibre_32 = new Service();
        $service_fibre_32->setIdCweb("C-ADRESIP");
        $service_fibre_32->setLabel("Option Adresse IPV4");
        $service_fibre_32->setLabelImpression("Option Adresse IPV4");
        $service_fibre_32->setPrix(2.50);
        $service_fibre_32->setPrixFAS36mois(null);
        $service_fibre_32->setPrixFAS60mois(null);
        $service_fibre_32->setCategorie($this->getReference('service-categorie-fibre-l2l-option'));
        $manager->persist($service_fibre_32);

        $service_fibre_33 = new Service();
        $service_fibre_33->setIdCweb("VPN");
        $service_fibre_33->setLabel("Option VPN Nomade en cœur de réseau (pour 1 utilisateur)");
        $service_fibre_33->setLabelImpression("Option VPN Nomade en cœur de réseau (pour 1 utilisateur)");
        $service_fibre_33->setPrix(1.5);
        $service_fibre_33->setPrixFAS36mois(40.00);
        $service_fibre_33->setPrixFAS60mois(40.00);
        $service_fibre_33->setCategorie($this->getReference('service-categorie-fibre-l2l-option'));
        $manager->persist($service_fibre_33);

        $service_fibre_34 = new Service();
        $service_fibre_34->setIdCweb("CONTROLEUR-WIFI-SS");
        $service_fibre_34->setLabel("Option contrôleur wifi sans services (Gestion multi SSID)");
        $service_fibre_34->setLabelImpression("Option contrôleur wifi sans services (Gestion multi SSID)");
        $service_fibre_34->setPrix(20.00);
        $service_fibre_34->setPrixFAS36mois(null);
        $service_fibre_34->setPrixFAS60mois(null);
        $service_fibre_34->setCategorie($this->getReference('service-categorie-fibre-l2l'));
        $manager->persist($service_fibre_34);

        $service_fibre_35 = new Service();
        $service_fibre_35->setIdCweb("CONTROLEUR-WIFI-AS");
        $service_fibre_35->setLabel("Option contrôleur wifi avec services Antivirus - Web Filter & Gestion multi SSID");
        $service_fibre_35->setLabelImpression("Option contrôleur wifi avec services Antivirus - Web Filter & Gestion multi SSID");
        $service_fibre_35->setPrix(45.00);
        $service_fibre_35->setPrixFAS36mois(null);
        $service_fibre_35->setPrixFAS60mois(null);
        $service_fibre_35->setCategorie($this->getReference('service-categorie-fibre-l2l'));
        $manager->persist($service_fibre_35);

        // Service voix - centrex
        $service_fibre_36 = new Service();
        $service_fibre_36->setIdCweb("C-CANCPT");
        $service_fibre_36->setLabel("Canal au compteur (par appel simultané)");
        $service_fibre_36->setPrix(4.90);
        $service_fibre_36->setQuantiteMinimum(2);
        $service_fibre_36->setCategorie($this->getReference('service-categorie-voix-centrex-voip'));
        $manager->persist($service_fibre_36);

        $service_fibre_37 = new Service();
        $service_fibre_37->setIdCweb("C-SDA5");
        $service_fibre_37->setLabel("Création de Sélection Directe à l'Arrivée (par bloc de 5 SDA)");
        $service_fibre_37->setPrix(4.65);
        $service_fibre_37->setCategorie($this->getReference('service-categorie-voix-centrex-voip'));
        $manager->persist($service_fibre_37);

        $service_fibre_38 = new Service();
        $service_fibre_38->setIdCweb("C-SDA");
        $service_fibre_38->setLabel("Portabilité de Sélection Directe à l'Arrivée (SDA)");
        $service_fibre_38->setPrix(0.93);
        $service_fibre_38->setCategorie($this->getReference('service-categorie-voix-centrex-voip'));
        $manager->persist($service_fibre_38);

        $service_fibre_39 = new Service();
        $service_fibre_39->setIdCweb("C-LICENCEIPBX");
        $service_fibre_39->setLabel("Licence IPBX (par utilisateur) incluant les modules, fax, confèrence et SVI");
        $service_fibre_39->setPrix(3.00);
        $service_fibre_39->setCategorie($this->getReference('service-categorie-voix-centrex-voip'));
        $manager->persist($service_fibre_39);

        $service_fibre_40 = new Service();
        $service_fibre_40->setIdCweb("C-VMIPBXDEDIEE");
        $service_fibre_40->setLabel("VM IPBX dédiée (Incluant le module statistiques)");
        $service_fibre_40->setPrix(40.00);
        $service_fibre_40->setCategorie($this->getReference('service-categorie-voix-centrex-voip'));
        $manager->persist($service_fibre_40);

        $service_fibre_41 = new Service();
        $service_fibre_41->setIdCweb("VPN");
        $service_fibre_41->setLabel("VPN SSL Nomade");
        $service_fibre_41->setPrix(1.50);
        $service_fibre_41->setCategorie($this->getReference('service-categorie-voix-centrex-voip'));
        $manager->persist($service_fibre_41);

        $service_fibre_42 = new Service();
        $service_fibre_42->setIdCweb("S-MOB3/4G-ILL ");
        $service_fibre_42->setLabel("Tout illimité 3G/4G, SMS/MMS/appels illimités fixe & mobile (Data non comprise dans le forfait)");
        $service_fibre_42->setPrix(13.90);
        $service_fibre_42->setPrixFAS12mois(30);
        $service_fibre_42->setPrixFAS36mois(30);
        $service_fibre_42->setPrixFAS60mois(30);
        $service_fibre_42->setCategorie($this->getReference('service-categorie-voix-mobile-4g'));
        $manager->persist($service_fibre_42);

        $service_fibre_43 = new Service();
        $service_fibre_43->setIdCweb("S-MOB3/4G-ILL5G ");
        $service_fibre_43->setLabel("Tout illimité 3G/4G, SMS/MMS/appels illimités fixe & mobile, data 5Go/mois");
        $service_fibre_43->setPrix(32.90);
        $service_fibre_43->setPrixFAS12mois(30);
        $service_fibre_43->setPrixFAS36mois(30);
        $service_fibre_43->setPrixFAS60mois(30);
        $service_fibre_43->setCategorie($this->getReference('service-categorie-voix-mobile-4g'));
        $manager->persist($service_fibre_43);

        $service_fibre_44 = new Service();
        $service_fibre_44->setIdCweb("S-MOB3/4G-ILL5G-10L");
        $service_fibre_44->setLabel("Tout illimité 3G/4G, SMS/MMS/appels illimités fixe & mobile, data 5Go/mois (À partir de 10 lignes et +)");
        $service_fibre_44->setPrix(25.90);
        $service_fibre_44->setPrixFAS12mois(30);
        $service_fibre_44->setPrixFAS36mois(30);
        $service_fibre_44->setPrixFAS60mois(30);
        $service_fibre_44->setCategorie($this->getReference('service-categorie-voix-mobile-4g'));
        $manager->persist($service_fibre_44);

        $service_fibre_45 = new Service();
        $service_fibre_45->setIdCweb("S-MOB3/4G-ILL5G-pack2");
        $service_fibre_45->setLabel("Tout illimité 3G/4G, SMS/MMS/appels illimités fixe & mobile, data 5Go/mois (Clients SDSL/fibre+IAAS)");
        $service_fibre_45->setPrix(21.90);
        $service_fibre_45->setPrixFAS12mois(30);
        $service_fibre_45->setPrixFAS36mois(30);
        $service_fibre_45->setPrixFAS60mois(30);
        $service_fibre_45->setCategorie($this->getReference('service-categorie-voix-mobile-4g'));
        $manager->persist($service_fibre_45);

        $service_fibre_46 = new Service();
        $service_fibre_46->setIdCweb("S-MOB3/4G-ILL5G-pack3");
        $service_fibre_46->setLabel("Tout illimité 3G/4G, SMS/MMS/appels illimités fixe & mobile, data 5Go/mois (Clients SDSL/fibre+IAAS+Messagerie+Tél.)");
        $service_fibre_46->setPrix(15.00);
        $service_fibre_46->setPrixFAS12mois(30);
        $service_fibre_46->setPrixFAS36mois(30);
        $service_fibre_46->setPrixFAS60mois(30);
        $service_fibre_46->setCategorie($this->getReference('service-categorie-voix-mobile-4g'));
        $manager->persist($service_fibre_46);

        $service_fibre_47 = new Service();
        $service_fibre_47->setIdCweb("S-MOB-DATA");
        $service_fibre_47->setLabel("Modem 4G (10Go data)");
        $service_fibre_47->setPrix(39.00);
        $service_fibre_47->setPrixFAS12mois(30);
        $service_fibre_47->setPrixFAS36mois(30);
        $service_fibre_47->setPrixFAS60mois(30);
        $service_fibre_47->setCategorie($this->getReference('service-categorie-voix-mobile-4g'));
        $manager->persist($service_fibre_47);

        // Services Cloud
        $service_cloud_01 = new Service();
        $service_cloud_01->setLabel("Session à la demande (Sauvegarde J-15, Infogérance, W2016R2) limitée à 2 sessions simultanées et 3 utilisateurs");
        $service_cloud_01->setPrix(38.00);
        $service_cloud_01->setCategorie($this->getReference('service-categorie-cloud-services-cloud'));
        $manager->persist($service_cloud_01);

        $service_cloud_02 = new Service();
        $service_cloud_02->setLabel("Licence Remote Desktop Services");
        $service_cloud_02->setPrix(5.90);
        $service_cloud_02->setCategorie($this->getReference('service-categorie-cloud-services-cloud'));
        $manager->persist($service_cloud_02);

        $service_cloud_03 = new Service();
        $service_cloud_03->setLabel("Licence Remote Desktop Services Academic");
        $service_cloud_03->setPrix(0.62);
        $service_cloud_03->setCategorie($this->getReference('service-categorie-cloud-services-cloud'));
        $manager->persist($service_cloud_03);

        $service_cloud_04 = new Service();
        $service_cloud_04->setLabel("Licence Microsoft Office 2016 Std");
        $service_cloud_04->setPrix(14.35);
        $service_cloud_04->setCategorie($this->getReference('service-categorie-cloud-services-cloud'));
        $manager->persist($service_cloud_04);

        $service_cloud_05 = new Service();
        $service_cloud_05->setLabel("Licence Microsoft Office 2016 Std Academic");
        $service_cloud_05->setPrix(2.45);
        $service_cloud_05->setCategorie($this->getReference('service-categorie-cloud-services-cloud'));
        $manager->persist($service_cloud_05);

        $service_cloud_06 = new Service();
        $service_cloud_06->setLabel("Domaine (.fr/.com/.net)");
        $service_cloud_06->setPrix(2.90);
        $service_cloud_06->setCategorie($this->getReference('service-categorie-cloud-messagerie-classique'));
        $manager->persist($service_cloud_06);

        $service_cloud_07 = new Service();
        $service_cloud_07->setLabel("Hébergement Pack 5 BAL (5 Go/Bal)");
        $service_cloud_07->setPrix(6.50);
        $service_cloud_07->setCategorie($this->getReference('service-categorie-cloud-messagerie-classique'));
        $manager->persist($service_cloud_07);

        $service_cloud_08 = new Service();
        $service_cloud_08->setLabel("Hébergement Pack 10 BAL (5 Go/Bal)");
        $service_cloud_08->setPrix(12.50);
        $service_cloud_08->setCategorie($this->getReference('service-categorie-cloud-messagerie-classique'));
        $manager->persist($service_cloud_08);

        $service_cloud_09 = new Service();
        $service_cloud_09->setLabel("Hébergement Pack 25 BAL (5 Go/Bal)");
        $service_cloud_09->setPrix(21.00);
        $service_cloud_09->setCategorie($this->getReference('service-categorie-cloud-messagerie-classique'));
        $manager->persist($service_cloud_09);

        $service_cloud_10 = new Service();
        $service_cloud_10->setLabel("Hébergement Pack 50 BAL (5 Go/Bal)");
        $service_cloud_10->setPrix(29.00);
        $service_cloud_10->setCategorie($this->getReference('service-categorie-cloud-messagerie-classique'));
        $manager->persist($service_cloud_10);

        $service_cloud_11 = new Service();
        $service_cloud_11->setLabel("Adresse mail FSE avec extension @sante.iptis.net");
        $service_cloud_11->setPrix(3.00);
        $service_cloud_11->setCategorie($this->getReference('service-categorie-cloud-messagerie-classique'));
        $manager->persist($service_cloud_11);

        $service_cloud_12 = new Service();
        $service_cloud_12->setLabel("Compte Hosted Exchange Standard 5 Go");
        $service_cloud_12->setPrix(4.80);
        $service_cloud_12->setCategorie($this->getReference('service-categorie-cloud-messagerie-collaborative'));
        $manager->persist($service_cloud_12);

        $service_cloud_13 = new Service();
        $service_cloud_13->setLabel("Compte Hosted Exchange Standard 10 Go");
        $service_cloud_13->setPrix(5.80);
        $service_cloud_13->setCategorie($this->getReference('service-categorie-cloud-messagerie-collaborative'));
        $manager->persist($service_cloud_13);

        $service_cloud_14 = new Service();
        $service_cloud_14->setLabel("Compte Hosted Exchange Standard 20 Go");
        $service_cloud_14->setPrix(6.90);
        $service_cloud_14->setCategorie($this->getReference('service-categorie-cloud-messagerie-collaborative'));
        $manager->persist($service_cloud_14);

        $service_cloud_15 = new Service();
        $service_cloud_15->setLabel("Compte Hosted Exchange Standard 30 Go");
        $service_cloud_15->setPrix(7.90);
        $service_cloud_15->setCategorie($this->getReference('service-categorie-cloud-messagerie-collaborative'));
        $manager->persist($service_cloud_15);

        $service_cloud_16 = new Service();
        $service_cloud_16->setLabel("Domaine (.fr/.com/.net)");
        $service_cloud_16->setPrix(2.9);
        $service_cloud_16->setCategorie($this->getReference('service-categorie-cloud-messagerie-collaborative'));
        $manager->persist($service_cloud_16);

        // Services IAAS
        $service_iaas_01 = new Service();
        $service_iaas_01->setLabel("Serveur virtuel AD mutualisé (1 Vcpu - 2GB Ram - 30 Go - 1 IPV4 - W2016R2 - Sauvegarde J-15, Infogérance)");
        $service_iaas_01->setPrix(39.00);
        $service_iaas_01->setCategorie($this->getReference('service-categorie-iaas-services-iaas'));
        $manager->persist($service_iaas_01);

        $service_iaas_02 = new Service();
        $service_iaas_02->setLabel("Serveur virtuel AD dédié (1 Vcpu - 2GB Ram - 30 Go - 1 IPV4 - W2016R2  - Sauvegarde J-15, Infogérance)*");
        $service_iaas_02->setPrix(59.00);
        $service_iaas_02->setCategorie($this->getReference('service-categorie-iaas-services-iaas'));
        $manager->persist($service_iaas_02);

        $service_iaas_03 = new Service();
        $service_iaas_03->setLabel("Serveur virtuel Cloud S (2 Vcpu - 4GB Ram - 80 Go - 10 MBITS - 1 IPV4  - W2016R2 - Sauvegarde J-15, Infogérance)");
        $service_iaas_03->setPrix(99.00);
        $service_iaas_03->setCategorie($this->getReference('service-categorie-iaas-services-iaas'));
        $manager->persist($service_iaas_03);

        $service_iaas_04 = new Service();
        $service_iaas_04->setLabel("Serveur virtuel Cloud M (4 Vcpu - 6GB Ram - 250 Go - 10 MBITS - 1 IPV4 - W2016R2 - Sauvegarde J-15, Infogérance)");
        $service_iaas_04->setPrix(149.00);
        $service_iaas_04->setCategorie($this->getReference('service-categorie-iaas-services-iaas'));
        $manager->persist($service_iaas_04);

        $service_iaas_05 = new Service();
        $service_iaas_05->setLabel("Serveur virtuel Cloud L (6 Vcpu - 8GB Ram - 500 Go - 10 MBITS - 1 IPV4 - W2016R2 - Sauvegarde J-15, Infogérance)");
        $service_iaas_05->setPrix(249.00);
        $service_iaas_05->setCategorie($this->getReference('service-categorie-iaas-services-iaas'));
        $manager->persist($service_iaas_05);

        $service_iaas_06 = new Service();
        $service_iaas_06->setLabel("Serveur virtuel Cloud XL (6 Vcpu - 12GB Ram - 1 To - 10 MBITS - 1 IPV4 - W2016R2 - Sauvegarde J-15, Infogérance)");
        $service_iaas_06->setPrix(349.00);
        $service_iaas_06->setCategorie($this->getReference('service-categorie-iaas-services-iaas'));
        $manager->persist($service_iaas_06);

        $service_iaas_07 = new Service();
        $service_iaas_07->setLabel("Serveur virtuel Cloud XXL (8 Vcpu - 16GB Ram - 1,5 To - 20 MBITS - 1 IPV4 - W2016R2 - Sauvegarde J-15, Infogérance)");
        $service_iaas_07->setPrix(449.00);
        $service_iaas_07->setCategorie($this->getReference('service-categorie-iaas-services-iaas'));
        $manager->persist($service_iaas_07);

        $service_iaas_08 = new Service();
        $service_iaas_08->setLabel("Serveur virtuel Cloud Sage (2 Vcpu - 8GB Ram - 100 Go - 10 MBITS - 1 IPV4 - W2016R2 - Sauvegarde J-15, Infogérance)");
        $service_iaas_08->setPrix(119.00);
        $service_iaas_08->setCategorie($this->getReference('service-categorie-iaas-services-iaas'));
        $manager->persist($service_iaas_08);

        $service_iaas_09 = new Service();
        $service_iaas_09->setLabel("Licence Remote Desktop Services");
        $service_iaas_09->setPrix(5.90);
        $service_iaas_09->setCategorie($this->getReference('service-categorie-iaas-services-iaas'));
        $manager->persist($service_iaas_09);

        $service_iaas_10 = new Service();
        $service_iaas_10->setLabel("Licence Remote Desktop Services Academic");
        $service_iaas_10->setPrix(0.62);
        $service_iaas_10->setCategorie($this->getReference('service-categorie-iaas-services-iaas'));
        $manager->persist($service_iaas_10);

        $service_iaas_11 = new Service();
        $service_iaas_11->setLabel("Licence Microsoft Office 2016 Std");
        $service_iaas_11->setPrix(14.35);
        $service_iaas_11->setCategorie($this->getReference('service-categorie-iaas-services-iaas'));
        $manager->persist($service_iaas_11);

        $service_iaas_12 = new Service();
        $service_iaas_12->setLabel("Licence Microsoft Office 2016 Std Academic");
        $service_iaas_12->setPrix(2.45);
        $service_iaas_12->setCategorie($this->getReference('service-categorie-iaas-services-iaas'));
        $manager->persist($service_iaas_12);

        $service_iaas_13 = new Service();
        $service_iaas_13->setLabel("Serveur partage de fichiers via FTP (10 Go de stockage - 1 IPV4 - W2016R2 - Sauvegarde J-15, Infogérance)");
        $service_iaas_13->setPrix(49.00);
        $service_iaas_13->setCategorie($this->getReference('service-categorie-iaas-services-iaas'));
        $manager->persist($service_iaas_13);

        $service_iaas_14 = new Service();
        $service_iaas_14->setLabel("VPN SSL Nomande");
        $service_iaas_14->setPrix(1.50);
        $service_iaas_14->setCategorie($this->getReference('service-categorie-iaas-services-iaas'));
        $manager->persist($service_iaas_14);

        $service_iaas_15 = new Service();
        $service_iaas_15->setLabel("Licence Microsoft Exchange 2016 Std");
        $service_iaas_15->setPrix(2.30);
        $service_iaas_15->setCategorie($this->getReference('service-categorie-iaas-services-iaas'));
        $manager->persist($service_iaas_15);

        $service_iaas_16 = new Service();
        $service_iaas_16->setLabel("Licence Microsoft Exchange 2016 Academic");
        $service_iaas_16->setPrix(0.45);
        $service_iaas_16->setCategorie($this->getReference('service-categorie-iaas-services-iaas'));
        $manager->persist($service_iaas_16);

        $service_iaas_17 = new Service();
        $service_iaas_17->setLabel("1 Ghz de Vcpu supplémentaire");
        $service_iaas_17->setPrix(9.00);
        $service_iaas_17->setCategorie($this->getReference('service-categorie-iaas-services-iaas'));
        $manager->persist($service_iaas_17);

        $service_iaas_18 = new Service();
        $service_iaas_18->setLabel("1 Go de Ram supplémentaire");
        $service_iaas_18->setPrix(12.00);
        $service_iaas_18->setCategorie($this->getReference('service-categorie-iaas-services-iaas'));
        $manager->persist($service_iaas_18);

        $service_iaas_19 = new Service();
        $service_iaas_19->setLabel("10 Go de stockage supplémentaires");
        $service_iaas_19->setPrix(12.00);
        $service_iaas_19->setCategorie($this->getReference('service-categorie-iaas-services-iaas'));
        $manager->persist($service_iaas_19);

        $service_iaas_20 = new Service();
        $service_iaas_20->setLabel("Domaine (.fr/.com/.net)");
        $service_iaas_20->setPrix(2.90);
        $service_iaas_20->setCategorie($this->getReference('service-categorie-iaas-messagerie-classique'));
        $manager->persist($service_iaas_20);

        $service_iaas_21 = new Service();
        $service_iaas_21->setLabel("Hébergement Pack 5 BAL (5 Go/Bal)");
        $service_iaas_21->setPrix(6.50);
        $service_iaas_21->setCategorie($this->getReference('service-categorie-iaas-messagerie-classique'));
        $manager->persist($service_iaas_21);

        $service_iaas_22 = new Service();
        $service_iaas_22->setLabel("Hébergement Pack 10 BAL (5 Go/Bal)");
        $service_iaas_22->setPrix(12.50);
        $service_iaas_22->setCategorie($this->getReference('service-categorie-iaas-messagerie-classique'));
        $manager->persist($service_iaas_22);

        $service_iaas_23 = new Service();
        $service_iaas_23->setLabel("Hébergement Pack 25 BAL (5 Go/Bal)");
        $service_iaas_23->setPrix(21.00);
        $service_iaas_23->setCategorie($this->getReference('service-categorie-iaas-messagerie-classique'));
        $manager->persist($service_iaas_23);

        $service_iaas_24 = new Service();
        $service_iaas_24->setLabel("Hébergement Pack 50 BAL (5 Go/Bal)");
        $service_iaas_24->setPrix(29.00);
        $service_iaas_24->setCategorie($this->getReference('service-categorie-iaas-messagerie-classique'));
        $manager->persist($service_iaas_24);

        $service_iaas_25 = new Service();
        $service_iaas_25->setLabel("Adresse mail FSE avec extension @sante.iptis.net");
        $service_iaas_25->setPrix(3.00);
        $service_iaas_25->setCategorie($this->getReference('service-categorie-iaas-messagerie-classique'));
        $manager->persist($service_iaas_25);

        $service_iaas_26 = new Service();
        $service_iaas_26->setLabel("Compte Hosted Exchange Standard 5 Go");
        $service_iaas_26->setPrix(4.80);
        $service_iaas_26->setCategorie($this->getReference('service-categorie-iaas-messagerie-collaborative'));
        $manager->persist($service_iaas_26);

        $service_iaas_27 = new Service();
        $service_iaas_27->setLabel("Compte Hosted Exchange Standard 10 Go");
        $service_iaas_27->setPrix(5.80);
        $service_iaas_27->setCategorie($this->getReference('service-categorie-iaas-messagerie-collaborative'));
        $manager->persist($service_iaas_27);

        $service_iaas_28 = new Service();
        $service_iaas_28->setLabel("Compte Hosted Exchange Standard 20 Go");
        $service_iaas_28->setPrix(6.90);
        $service_iaas_28->setCategorie($this->getReference('service-categorie-iaas-messagerie-collaborative'));
        $manager->persist($service_iaas_28);

        $service_iaas_29 = new Service();
        $service_iaas_29->setLabel("Compte Hosted Exchange Standard 30 Go");
        $service_iaas_29->setPrix(7.90);
        $service_iaas_29->setCategorie($this->getReference('service-categorie-iaas-messagerie-collaborative'));
        $manager->persist($service_iaas_29);

        $service_iaas_30 = new Service();
        $service_iaas_30->setLabel("Domaine (.fr/.com/.net)");
        $service_iaas_30->setPrix(2.9);
        $service_iaas_30->setCategorie($this->getReference('service-categorie-iaas-messagerie-collaborative'));
        $manager->persist($service_iaas_30);

        // Sauvegarde
        $service_sauvegarde_01 = new Service();
        $service_sauvegarde_01->setLabel("Sauvegarde livedataprotection 5 Go");
        $service_sauvegarde_01->setPrix(13.00);
        $service_sauvegarde_01->setPrixFAS12mois(250);
        $service_sauvegarde_01->setPrixFAS36mois(250);
        $service_sauvegarde_01->setPrixFAS60mois(250);
        $service_sauvegarde_01->setCategorie($this->getReference('service-categorie-sauvegarde-protection'));
        $manager->persist($service_sauvegarde_01);

        $service_sauvegarde_02 = new Service();
        $service_sauvegarde_02->setLabel("Sauvegarde livedataprotection 10 Go");
        $service_sauvegarde_02->setPrix(22.00);
        $service_sauvegarde_02->setPrixFAS12mois(250);
        $service_sauvegarde_02->setPrixFAS36mois(250);
        $service_sauvegarde_02->setPrixFAS60mois(250);
        $service_sauvegarde_02->setCategorie($this->getReference('service-categorie-sauvegarde-protection'));
        $manager->persist($service_sauvegarde_02);

        $service_sauvegarde_03 = new Service();
        $service_sauvegarde_03->setLabel("Sauvegarde livedataprotection 20 Go");
        $service_sauvegarde_03->setPrix(30.00);
        $service_sauvegarde_03->setPrixFAS12mois(250);
        $service_sauvegarde_03->setPrixFAS36mois(250);
        $service_sauvegarde_03->setPrixFAS60mois(250);
        $service_sauvegarde_03->setCategorie($this->getReference('service-categorie-sauvegarde-protection'));
        $manager->persist($service_sauvegarde_03);

        $service_sauvegarde_04 = new Service();
        $service_sauvegarde_04->setLabel("Sauvegarde livedataprotection > 25 Go (par Go)");
        $service_sauvegarde_04->setPrix(1.00);
        $service_sauvegarde_04->setPrixFAS12mois(250);
        $service_sauvegarde_04->setPrixFAS36mois(250);
        $service_sauvegarde_04->setPrixFAS60mois(250);
        $service_sauvegarde_04->setQuantiteMinimum(25);
        $service_sauvegarde_04->setCategorie($this->getReference('service-categorie-sauvegarde-protection-go'));
        $manager->persist($service_sauvegarde_04);

        $service_sauvegarde_05 = new Service();
        $service_sauvegarde_05->setLabel("Sauvegarde livedataprotection > 150 Go (par Go)");
        $service_sauvegarde_05->setPrix(0.75);
        $service_sauvegarde_05->setPrixFAS12mois(250);
        $service_sauvegarde_05->setPrixFAS36mois(250);
        $service_sauvegarde_05->setPrixFAS60mois(250);
        $service_sauvegarde_05->setQuantiteMinimum(150);
        $service_sauvegarde_05->setCategorie($this->getReference('service-categorie-sauvegarde-protection-go'));
        $manager->persist($service_sauvegarde_05);

        // Services maintenance
        $service_maintenance_01 = new Service();
        $service_maintenance_01->setLabel("Serveur physique ou Serveur virtuel");
        $service_maintenance_01->setPrix(50.00);
        $service_maintenance_01->setInformationComplementaire("Supervision des sauvegardes (1)<br />Suivi des mises à jour Windows<br />Assistance dans la gestion des comptes utilisateurs, des stratégies de sécurité …<br />Assistance quotidienne");
        $service_maintenance_01->setCategorie($this->getReference('service-categorie-maintenance-materiel'));
        $manager->persist($service_maintenance_01);

        $service_maintenance_02 = new Service();
        $service_maintenance_02->setLabel("Serveur Exchange");
        $service_maintenance_02->setPrix(35.00);
        $service_maintenance_02->setInformationComplementaire("Supervision des sauvegardes (1)<br />Suivi des mises à jour Windows<br />Assistance dans la gestion des comptes utilisateurs, des stratégies de sécurité …<br />Assistance quotidienne");
        $service_maintenance_02->setCategorie($this->getReference('service-categorie-maintenance-materiel'));
        $manager->persist($service_maintenance_02);

        $service_maintenance_03 = new Service();
        $service_maintenance_03->setLabel("NAS");
        $service_maintenance_03->setPrix(35.00);
        $service_maintenance_03->setInformationComplementaire("Supervision des sauvegardes (6)<br />Gestion des droits d'accès au NAS");
        $service_maintenance_03->setCategorie($this->getReference('service-categorie-maintenance-materiel'));
        $manager->persist($service_maintenance_03);

        $service_maintenance_04 = new Service();
        $service_maintenance_04->setLabel("Boîtier de sécurité");
        $service_maintenance_04->setPrix(25.00);
        $service_maintenance_04->setInformationComplementaire("Suivi des mises à jour du constructeur, Assistance dans le paramétrage");
        $service_maintenance_04->setCategorie($this->getReference('service-categorie-maintenance-materiel'));
        $manager->persist($service_maintenance_04);

        $service_maintenance_05 = new Service();
        $service_maintenance_05->setLabel("Poste de travail (1 poste)");
        $service_maintenance_05->setPrix(25.00);
        $service_maintenance_05->setInformationComplementaire("Suivi des mises à jour Windows<br />Accompagnement de l'éditeur pour les MAJ et le paramétrage des logiciels métiers (2)<br />Assistance quotidienne (sur site & en télémaintenance)");
        $service_maintenance_05->setCategorie($this->getReference('service-categorie-maintenance-materiel'));
        $manager->persist($service_maintenance_05);

        $service_maintenance_06 = new Service();
        $service_maintenance_06->setLabel("Poste de travail (2 postes)");
        $service_maintenance_06->setPrix(29.50);
        $service_maintenance_06->setInformationComplementaire("Suivi des mises à jour Windows<br />Accompagnement de l'éditeur pour les MAJ et le paramétrage des logiciels métiers (2)<br />Assistance quotidienne (sur site & en télémaintenance)");
        $service_maintenance_06->setCategorie($this->getReference('service-categorie-maintenance-materiel'));
        $manager->persist($service_maintenance_06);

        $service_maintenance_07 = new Service();
        $service_maintenance_07->setLabel("Poste de travail (3 postes)");
        $service_maintenance_07->setPrix(33.50);
        $service_maintenance_07->setInformationComplementaire("Suivi des mises à jour Windows<br />Accompagnement de l'éditeur pour les MAJ et le paramétrage des logiciels métiers (2)<br />Assistance quotidienne (sur site & en télémaintenance)");
        $service_maintenance_07->setCategorie($this->getReference('service-categorie-maintenance-materiel'));
        $manager->persist($service_maintenance_07);

        $service_maintenance_08 = new Service();
        $service_maintenance_08->setLabel("Poste de travail (1 poste suppl.)");
        $service_maintenance_08->setPrix(9.50);
        $service_maintenance_08->setInformationComplementaire("Suivi des mises à jour Windows<br />Accompagnement de l'éditeur pour les MAJ et le paramétrage des logiciels métiers (2)<br />Assistance quotidienne (sur site & en télémaintenance)");
        $service_maintenance_08->setCategorie($this->getReference('service-categorie-maintenance-materiel'));
        $manager->persist($service_maintenance_08);

        $service_maintenance_09 = new Service();
        $service_maintenance_09->setLabel("Poste de travail (1 poste suppl.)");
        $service_maintenance_09->setPrix(9.50);
        $service_maintenance_09->setInformationComplementaire("Suivi des mises à jour Windows<br />Accompagnement de l'éditeur pour les MAJ et le paramétrage des logiciels métiers (2)<br />Assistance quotidienne (sur site & en télémaintenance)");
        $service_maintenance_09->setCategorie($this->getReference('service-categorie-maintenance-materiel'));
        $manager->persist($service_maintenance_09);

        $service_maintenance_10 = new Service();
        $service_maintenance_10->setLabel("Simply vital");
        $service_maintenance_10->setPrix(17.00);
        $service_maintenance_10->setInformationComplementaire("Assistance quotidienne (sur site & en télémaintenance)");
        $service_maintenance_10->setCategorie($this->getReference('service-categorie-maintenance-materiel'));
        $manager->persist($service_maintenance_10);

        $service_maintenance_11 = new Service();
        $service_maintenance_11->setLabel("Lecteur de carte");
        $service_maintenance_11->setPrix(8.50);
        $service_maintenance_11->setInformationComplementaire("Assistance quotidienne (sur site & en télémaintenance)<br />Prêt d'un lecteur, paramétrage compris sous réserve que la garantie constructeur soit effective (3)");
        $service_maintenance_11->setCategorie($this->getReference('service-categorie-maintenance-materiel'));
        $manager->persist($service_maintenance_11);

        $service_maintenance_12 = new Service();
        $service_maintenance_12->setLabel("TBI / VPI");
        $service_maintenance_12->setPrix(15.00);
        $service_maintenance_12->setInformationComplementaire("Suivi des MAJ logiciels<br />Réglage du TBI<br />Changement d'une pièce d'usure (hors pièce)");
        $service_maintenance_12->setCategorie($this->getReference('service-categorie-maintenance-materiel'));
        $manager->persist($service_maintenance_12);

        $service_maintenance_13 = new Service();
        $service_maintenance_13->setLabel("Classe mobile (par poste)");
        $service_maintenance_13->setPrix(9.50);
        $service_maintenance_13->setInformationComplementaire("Suivi des mises à jour Windows<br />Accompagnement de l'éditeur pour les MAJ et le paramétrage des logiciels métiers (2)<br />Désinfection du poste de travail en cas de virus ou spyware<br />Assistance quotidienne (sur site & en télémaintenance)");
        $service_maintenance_13->setCategorie($this->getReference('service-categorie-maintenance-materiel'));
        $manager->persist($service_maintenance_13);

        $service_maintenance_14 = new Service();
        $service_maintenance_14->setLabel("Routeur");
        $service_maintenance_14->setPrix(4.50);
        $service_maintenance_14->setCategorie($this->getReference('service-categorie-maintenance-materiel'));
        $manager->persist($service_maintenance_14);

        $service_maintenance_15 = new Service();
        $service_maintenance_15->setLabel("IPBX");
        $service_maintenance_15->setPrix(12.50);
        $service_maintenance_15->setInformationComplementaire("Modifications des paramétrages dans l'IPBX, Mise en place de nouvelles stratégies");
        $service_maintenance_15->setCategorie($this->getReference('service-categorie-maintenance-telephonie'));
        $manager->persist($service_maintenance_15);

        $service_maintenance_16 = new Service();
        $service_maintenance_16->setLabel("Téléphone");
        $service_maintenance_16->setPrix(1.00);
        $service_maintenance_16->setInformationComplementaire("Prêt de téléphone<br />Remplacement du téléphone en cas de panne (4)<br />Paramétrage des touches<br />Mise à jour des raccourcis");
        $service_maintenance_16->setCategorie($this->getReference('service-categorie-maintenance-telephonie'));
        $manager->persist($service_maintenance_16);

        $service_maintenance_17 = new Service();
        $service_maintenance_17->setLabel("DECT");
        $service_maintenance_17->setPrix(1.00);
        $service_maintenance_17->setInformationComplementaire("Prêt de téléphone<br />Remplacement du téléphone en cas de panne (4)<br />Paramétrage des touches<br />Mise à jour des raccourcis");
        $service_maintenance_17->setCategorie($this->getReference('service-categorie-maintenance-telephonie'));
        $manager->persist($service_maintenance_17);

        $manager->flush();

        // Références
        $this->addReference('service-xdsl-1', $service_xdsl_1);
        $this->addReference('service-xdsl-2', $service_xdsl_2);
        $this->addReference('service-xdsl-3', $service_xdsl_3);
        $this->addReference('service-xdsl-4', $service_xdsl_4);
        $this->addReference('service-xdsl-5', $service_xdsl_5);
        $this->addReference('service-xdsl-6', $service_xdsl_6);
        $this->addReference('service-xdsl-7', $service_xdsl_7);
        $this->addReference('service-xdsl-8', $service_xdsl_8);
        $this->addReference('service-xdsl-9', $service_xdsl_9);
        $this->addReference('service-xdsl-10', $service_xdsl_10);
        $this->addReference('service-xdsl-11', $service_xdsl_11);
        $this->addReference('service-xdsl-12', $service_xdsl_12);
        $this->addReference('service-xdsl-13', $service_xdsl_13);
        $this->addReference('service-xdsl-14', $service_xdsl_14);
        $this->addReference('service-xdsl-15', $service_xdsl_15);
        $this->addReference('service-xdsl-16', $service_xdsl_16);
        $this->addReference('service-xdsl-17', $service_xdsl_17);
        $this->addReference('service-xdsl-18', $service_xdsl_18);

        $this->addReference('service-fibre-1', $service_fibre_1);
        $this->addReference('service-fibre-2', $service_fibre_2);
        $this->addReference('service-fibre-3', $service_fibre_3);
        $this->addReference('service-fibre-4', $service_fibre_4);
        $this->addReference('service-fibre-5', $service_fibre_5);
        $this->addReference('service-fibre-6', $service_fibre_6);
        $this->addReference('service-fibre-7', $service_fibre_7);
        $this->addReference('service-fibre-8', $service_fibre_8);
        $this->addReference('service-fibre-9', $service_fibre_9);
        $this->addReference('service-fibre-10', $service_fibre_10);
        $this->addReference('service-fibre-11', $service_fibre_11);
        $this->addReference('service-fibre-12', $service_fibre_12);
        $this->addReference('service-fibre-13', $service_fibre_13);
        $this->addReference('service-fibre-14', $service_fibre_14);
        $this->addReference('service-fibre-15', $service_fibre_15);
        $this->addReference('service-fibre-16', $service_fibre_16);
        $this->addReference('service-fibre-17', $service_fibre_17);
        $this->addReference('service-fibre-18', $service_fibre_18);
        $this->addReference('service-fibre-19', $service_fibre_19);
        $this->addReference('service-fibre-20', $service_fibre_20);
        $this->addReference('service-fibre-21', $service_fibre_21);
        $this->addReference('service-fibre-22', $service_fibre_22);
        $this->addReference('service-fibre-23', $service_fibre_23);
        $this->addReference('service-fibre-24', $service_fibre_24);
        $this->addReference('service-fibre-25', $service_fibre_25);
        $this->addReference('service-fibre-26', $service_fibre_26);
        $this->addReference('service-fibre-27', $service_fibre_27);
        $this->addReference('service-fibre-28', $service_fibre_28);
        $this->addReference('service-fibre-29', $service_fibre_29);
        $this->addReference('service-fibre-30', $service_fibre_30);
        $this->addReference('service-fibre-31', $service_fibre_31);
        $this->addReference('service-fibre-32', $service_fibre_32);
        $this->addReference('service-fibre-33', $service_fibre_33);
        $this->addReference('service-fibre-34', $service_fibre_34);
        $this->addReference('service-fibre-35', $service_fibre_35);
        $this->addReference('service-fibre-36', $service_fibre_36);
        $this->addReference('service-fibre-37', $service_fibre_37);
        $this->addReference('service-fibre-38', $service_fibre_38);
        $this->addReference('service-fibre-39', $service_fibre_39);
        $this->addReference('service-fibre-40', $service_fibre_40);
        $this->addReference('service-fibre-41', $service_fibre_41);
        $this->addReference('service-fibre-42', $service_fibre_42);
        $this->addReference('service-fibre-43', $service_fibre_43);
        $this->addReference('service-fibre-44', $service_fibre_44);
        $this->addReference('service-fibre-45', $service_fibre_45);
        $this->addReference('service-fibre-46', $service_fibre_46);
        $this->addReference('service-fibre-47', $service_fibre_47);

        $this->addReference('service-cloud-1', $service_cloud_01);
        $this->addReference('service-cloud-2', $service_cloud_02);
        $this->addReference('service-cloud-3', $service_cloud_03);
        $this->addReference('service-cloud-4', $service_cloud_04);
        $this->addReference('service-cloud-5', $service_cloud_05);
        $this->addReference('service-cloud-6', $service_cloud_06);
        $this->addReference('service-cloud-7', $service_cloud_07);
        $this->addReference('service-cloud-8', $service_cloud_08);
        $this->addReference('service-cloud-9', $service_cloud_09);
        $this->addReference('service-cloud-10', $service_cloud_10);
        $this->addReference('service-cloud-11', $service_cloud_11);
        $this->addReference('service-cloud-12', $service_cloud_12);
        $this->addReference('service-cloud-13', $service_cloud_13);
        $this->addReference('service-cloud-14', $service_cloud_14);
        $this->addReference('service-cloud-15', $service_cloud_15);
        $this->addReference('service-cloud-16', $service_cloud_16);

        $this->addReference('service-iaas-1', $service_iaas_01);
        $this->addReference('service-iaas-2', $service_iaas_02);
        $this->addReference('service-iaas-3', $service_iaas_03);
        $this->addReference('service-iaas-4', $service_iaas_04);
        $this->addReference('service-iaas-5', $service_iaas_05);
        $this->addReference('service-iaas-6', $service_iaas_06);
        $this->addReference('service-iaas-7', $service_iaas_07);
        $this->addReference('service-iaas-8', $service_iaas_08);
        $this->addReference('service-iaas-9', $service_iaas_09);
        $this->addReference('service-iaas-10', $service_iaas_10);
        $this->addReference('service-iaas-11', $service_iaas_11);
        $this->addReference('service-iaas-12', $service_iaas_12);
        $this->addReference('service-iaas-13', $service_iaas_13);
        $this->addReference('service-iaas-14', $service_iaas_14);
        $this->addReference('service-iaas-15', $service_iaas_15);
        $this->addReference('service-iaas-16', $service_iaas_16);
        $this->addReference('service-iaas-17', $service_iaas_17);
        $this->addReference('service-iaas-18', $service_iaas_18);
        $this->addReference('service-iaas-19', $service_iaas_19);
        $this->addReference('service-iaas-20', $service_iaas_20);
        $this->addReference('service-iaas-21', $service_iaas_21);
        $this->addReference('service-iaas-22', $service_iaas_22);
        $this->addReference('service-iaas-23', $service_iaas_23);
        $this->addReference('service-iaas-24', $service_iaas_24);
        $this->addReference('service-iaas-25', $service_iaas_25);
        $this->addReference('service-iaas-26', $service_iaas_26);
        $this->addReference('service-iaas-27', $service_iaas_27);
        $this->addReference('service-iaas-28', $service_iaas_28);
        $this->addReference('service-iaas-29', $service_iaas_29);
        $this->addReference('service-iaas-30', $service_iaas_30);

        $this->addReference('service-sauvegarde-1', $service_sauvegarde_01);
        $this->addReference('service-sauvegarde-2', $service_sauvegarde_02);
        $this->addReference('service-sauvegarde-3', $service_sauvegarde_03);
        $this->addReference('service-sauvegarde-4', $service_sauvegarde_04);
        $this->addReference('service-sauvegarde-5', $service_sauvegarde_05);

        $this->addReference('service-maintenance-1', $service_maintenance_01);
        $this->addReference('service-maintenance-2', $service_maintenance_02);
        $this->addReference('service-maintenance-3', $service_maintenance_03);
        $this->addReference('service-maintenance-4', $service_maintenance_04);
        $this->addReference('service-maintenance-5', $service_maintenance_05);
        $this->addReference('service-maintenance-6', $service_maintenance_06);
        $this->addReference('service-maintenance-7', $service_maintenance_07);
        $this->addReference('service-maintenance-8', $service_maintenance_08);
        $this->addReference('service-maintenance-9', $service_maintenance_09);
        $this->addReference('service-maintenance-10', $service_maintenance_10);
        $this->addReference('service-maintenance-11', $service_maintenance_11);
        $this->addReference('service-maintenance-12', $service_maintenance_12);
        $this->addReference('service-maintenance-13', $service_maintenance_13);
        $this->addReference('service-maintenance-14', $service_maintenance_14);
        $this->addReference('service-maintenance-15', $service_maintenance_15);
        $this->addReference('service-maintenance-16', $service_maintenance_16);
        $this->addReference('service-maintenance-17', $service_maintenance_17);
    }

    public function getDependencies()
    {
        return array(
            ServiceCategorieFixtures::class,
        );
    }
}
