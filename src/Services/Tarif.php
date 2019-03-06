<?php

namespace App\Services;

use App\Entity\Billet;
use App\Entity\Commande;


class Tarif
{

    private $prixTotal = 0;
    const TARIF_NORMAL = 16;
    const TARIF_ENFANT = 8;
    const TARIF_SENIOR = 12;
    const TARIF_REDUIT = 10;
    const TARIF_BEBE = 0;


    public function prix($dateNaissance, $reduction)
    {

        $from = new \DateTime($dateNaissance);
        $to = new \DateTime('today');
        $age = $from->diff($to)->y;

        switch (true) {
            case $age < 4:
                $price = self::TARIF_BEBE;
                break;

            case $age >= 4 AND $age < 12:
                $price = self::TARIF_ENFANT;
                break;

            case $age >= 12 AND $age < 60:
                if ($reduction === true) {
                    $price = self::TARIF_REDUIT;
                } else {
                    $price = self::TARIF_NORMAL;
                }
                break;

            case $age > 60:
                if ($reduction === true) {
                    $price = self::TARIF_REDUIT;
                } else {
                    $price = self::TARIF_SENIOR;
                }
                break;
        }
        return $price;

    }

    public function definePrice(Commande $commande)
    {
        /**
         * @var Commande $billetsTab
         */
        $billetsTab = $commande->getBillets();
        $this->prixTotal = 0;
        foreach ($billetsTab as $billet) {
            /**
             * @var Billet $billet
             */
            $billet->setPrix($this->prix($billet->getdateNaissance()->format('Y-m-d'), $billet->getReduction()));

            $this->prixTotal += $billet->getPrix();

        }
        $commande->setprixTotal($this->getPrixTotal());
    }

    public function getprixTotal()
    {

        return $this->prixTotal;
    }
}
