<?php

namespace App\Tests\Services;

use PHPUnit\Framework\TestCase;
use App\Services\Tarif;
use App\Entity\Commande;
use App\Entity\Billet;

class TarifTest extends TestCase{

    public function testPrix()
    {
       $tarif = new Tarif(0,8,16,12,10);
       $resultat = $tarif->Prix('2016-12-25',false);
       $resultat2 = $tarif->Prix('1950-12-25',false);
       $resultat3 = $tarif->Prix('2000-12-25',false);
       $resultat4 = $tarif->Prix('1995-12-25',false);
       $resultat5 = $tarif->Prix('2012-12-25',false);
       $resultat6 = $tarif->Prix('2016-12-25',true);
       $resultat7 = $tarif->Prix('1950-12-25',true);
       $resultat8 = $tarif->Prix('2000-12-25',true);
       $resultat9 = $tarif->Prix('1995-12-25',true);
       $resultat10 = $tarif->Prix('1900-12-25',true);

       $this->assertEquals(0,$resultat);
       $this->assertEquals(12,$resultat2);
       $this->assertEquals(16,$resultat3);
       $this->assertEquals(16,$resultat4);
       $this->assertEquals(8,$resultat5);
       $this->assertEquals(0,$resultat6);
       $this->assertEquals(10,$resultat7);
       $this->assertEquals(10,$resultat8);
       $this->assertEquals(10,$resultat9);
       $this->assertEquals(10,$resultat10);

   }

   public function testCommande()
   {
       $commande = new Commande();
       $billet = new Billet();
       $billet2 = new Billet();
       $billet3 = new Billet();
       $tarif = new Tarif(0,8,16,12,10);

       $billet->setDateNaissance(new \DateTime('2000-12-25'));
       $billet->setNom('Bertet');
       $billet->setPrenom('Théo');
       $billet->setPrix(16);
       $billet->setReduction(false);

       $billet2->setDateNaissance(new \DateTime('2000-12-25'));
       $billet2->setNom('Lamazou');
       $billet2->setPrenom('Luc');
       $billet2->setPrix(10);
       $billet2->setReduction(true);

       $billet3->setDateNaissance(new \DateTime('2017-12-25'));
       $billet3->setNom('Lamazou');
       $billet3->setPrenom('Jordy');
       $billet3->setPrix(0);
       $billet3->setReduction(false);

       $commande->addBillet($billet);
       $commande->addBillet($billet2);
       $commande->addBillet($billet3);
       $tarif->definePrice($commande);
       $this->assertEquals(26,$commande->getPrixTotal());
   }

}