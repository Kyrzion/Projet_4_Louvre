<?php

namespace App\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;
use Symfony\Component\DomCrawler\Field\FormField;


class HomeControllerTest extends WebTestCase
{
    private $client;

    public function __construct()
    {
        parent::__construct();
        $this->client = static::createClient();
    }

    public function testShowIndex()
    {
        $this->client->request('GET', '/');
        $this->assertEquals(200, $this->client->getResponse()->getStatusCode());
    }


    // Test fonctionnel d'un billet coutant 10€.
    public function testFormSubmit()
    {
        $crawler = $this->client->request('GET', '/form');
        $form = $crawler->selectButton('commande[valider]')->form();


// set some values
        $form['commande[DateCommande]'] = '2019-12-12';
        $form['commande[Formule]']->select(true);
        $form['commande[NbBillet]']->select(1);
        $form['commande[email]'] = 'lucas@email.com';

        $values = $form->getPhpValues();
        $values['commande']['billets'][1]['nom'] = 'Jean';
        $values['commande']['billets'][1]['prenom'] = 'Lucas';
        $values['commande']['billets'][1]['dateNaissance'] = '26/12/1995';
        $values['commande']['billets'][1]['pays'] = 'France';
        $values['commande']['billets'][1]['reduction'] = '1';

// submit the form
        $crawler = $this->client->request($form->getMethod(), $form->getUri(), $values, $form->getPhpFiles());

        $this->assertEquals(10, $crawler->filter('#total')->text());
    }

//    public function testFormSubmitTwo()
//    {
//        $crawler = $this->client->request('GET', '/form');
//        $form = $crawler->selectButton('commande[valider]')->form();
//        var_dump($form);
//        $values = $form->getPhpValues();
//// set some values
//        $form['commande[DateCommande]'] = '2019-12-12';
//        $form['commande[Formule]']->select('1');
//        $form['commande[NbBillet]']->select('3');
//        $values['commande']['billets'][0]['nom'] = 'Jean';
//        $values['commande']['billets'][0]['prenom'] = 'Lucas';
//        $values['commande']['billets'][0]['dateNaissance'] = '04-12-1990';
//        $values['commande']['billets'][0]['pays'] = 'FR';
//        $values['commande']['billets'][0]['reduction'] = '1';
//
//        $values['commande']['billets'][1]['nom'] = 'David';
//        $values['commande']['billets'][1]['prenom'] = 'Julien';
//        $values['commande']['billets'][1]['dateNaissance'] = '26-12-1992';
//        $values['commande']['billets'][1]['pays'] = 'FR';
//        $values['commande']['billets'][1]['reduction'] = '0';
//        $form['commande[email]'] = 'lucas@email.com';
//
//
//// submit the form
//        $crawler = $this->client->request($form->getMethod(), $form->getUri(), $values,
//            $form->getPhpFiles());
//
//        $crawler = $this->client->followRedirect();
//
//
//        $this->assertEquals(200, $this->client->getResponse()->getStatusCode());
//    }
//
//    public function testTotalPrice()
//    {
//        $this->client->request('GET', '/form');
//        $this->assertEquals(200, $this->client->getResponse()->getStatusCode());
//    }
}
