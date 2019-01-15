<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;
use Doctrine\Common\Persistence\ObjectManager;
use App\Entity\Commande;
use App\Entity\Billet;
use App\Form\CommandeType;
use App\Form\BilletType;


class HomeController extends Controller
{
    /**
     * @Route("/form", name="form")
     */
    public function index(Request $request, ObjectManager $manager)
    {
        $commande = new Commande();

        $form = $this->createForm(CommandeType::class, $commande);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $manager->persist($commande);
            $manager->flush();
        }

        return $this->render('form/index.html.twig', [
            'title' => 'Billetterie',
            'formCommande' => $form->createView()
        ]);
    }

    /**
     * @Route("/form2", name="form2")
     */
    public function formBillet(Request $request, ObjectManager $manager)
    {
        $billet = new Billet();

        $form2 = $this->createForm(BilletType::class, $billet);
        $form2->handleRequest($request);

        if ($form2->isSubmitted() && $form2->isValid()) {
            $manager->persist($billet);
            $manager->flush();
        }

        return $this->render('form/FormBillets.html.twig', [
            'title' => 'Billetterie',
            'formBillet' => $form2->createView()
        ]);
    }

    /**
     * @Route("/", name="home")
     */
    public function home()
    {
        return $this->render('form/home.html.twig', [
            'title' => "Musée du Louvre - Accueil",
        ]);
    }

    /**
     * @Route("formBillet", name="formBillet")
     */
    public function test()
    {

        return $this->render('form/FormBillets.html.twig', [
            'title' => "Billetterie",
        ]);
    }


}
