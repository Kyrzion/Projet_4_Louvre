<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;
use Doctrine\Common\Persistence\ObjectManager;
use App\Entity\Commande;
use App\Entity\Billet;
use App\Form\CommandeType;
use App\Form\BilletType;
use App\Services\Tarif;


class HomeController extends Controller
{
    /**
     * @Route("/form", name="form")
     */
    public function index(Request $request, ObjectManager $manager, Tarif $tarif)
    {
        $commande = new Commande();

        $form = $this->createForm(CommandeType::class, $commande);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $tarif->definePrice($commande);

            $manager->persist($commande);
            $manager->flush();
            return $this->render('form/recap.html.twig', [
                'commande' => $commande
            ]);
        }

        return $this->render('form/index.html.twig', [
            'title' => 'Billetterie',
            'formCommande' => $form->createView()
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
     * @Route("/recap/{id}", name="recap")
     */
    public function recap($id)
    {
        $commande = $this->getDoctrine()
            ->getRepository(Commande::class)
            ->find($id);

        if (!$commande) {
            throw $this->createNotFoundException(
                'Pas de commande trouvée pour id= ' . $id
            );
        }
        return $this->render('form/recap.html.twig', [
            'commande' => $commande,
            'title' => "Billetterie",
        ]);
    }


    /**
     * @Route("/success", name="success")
     */
    public function success()
    {
        // phpunit
        return $this->render('form/success.html.twig');
    }


    /**
     * @Route("/limitCommande/{date}", name="limite_Commande")
     */
    public function limitCommande(Request $request, $date)
    {
        $newDate = new \DateTime($date);
        $commande = $this->getDoctrine()
            ->getRepository(Commande::class)
            ->findBy(
                ['DateCommande' => $newDate]
            );
//            $date_visit = $request->query->get('commande_DateCommande');
//            $newDate = \DateTime::createFromFormat('d/m/Y', $date_visit)->format('Y-m-d');
//            $new_date = new \DateTime($newDate);
//            $booking = $this->get(Commande::class);

            return new JsonResponse(['quantity' => sizeof($commande)]);

    }
}
