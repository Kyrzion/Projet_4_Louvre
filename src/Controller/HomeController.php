<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\HiddenType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\CollectionType;
use Symfony\Component\Form\FormBuilder;
use Symfony\Component\Form\AbstractType;
use App\Entity\Commande;
use App\Entity\Billet;
use App\Forms\FormCommande;
use App\Forms\FormBillets;


class HomeController extends AbstractController
{
    /**
     * @Route("/form", name="form")
     */
    public function index(/*Request $request,ObjectManager $manager*/)
    {

      //article = new Article();
      for($i=1;$i<12;$i++)
          {
              $NbBillets[] = $i;
          }
      $form = $this->createFormBuilder()

                  ->add('VisitDate', DateType::class, array(
                    'label' => 'Date de la visite',
                    'widget' => 'choice',
                      ))
                  ->add('Formule', ChoiceType::class, array(
                    'label' => 'Type du billet',
                      'choices'  => array(
                          'Journée' => true,
                          'Demi-Journée' => false,),
                      ))
                  ->add('NbBillet', ChoiceType::class, array(
                    'label' => 'Nombre de billets',
                    'choices' => $NbBillets))
                    ->add('billets', CollectionType::class, array(
                      'entry_type'   => FormBillets::class,
                      'allow_add'    => true,
                      'allow_delete' => true
                    ))
                    ->getForm();


        return $this->render('form/index.html.twig', [
            'title' => 'Billetterie',
            'formBillet' => $form->createView()
        ]);
    }

    /**
     * @Route("/form2", name="form2")
     */

    public function form2(){
$form2 = $this->createFormBuilder()
      ->add('Nom',TextType::class)
      ->add('Prenom',TextType::class)
      ->add('Birth', DateType::class, array(
          'label'    => 'Date de naissance',))
      ->add('reduced_price', ChoiceType::class, array(
          'label'    => 'Tarif Réduit ',))
      ->getForm();

      return $this->render('form/FormBillets.html.twig',[
        'title' => "Musée du Louvre - Accueil",
        'formBillet' => $form2->createView()
      ]);
}


    /**
     * @Route("/", name="home")
     */
    public function home(){
      return $this->render('form/home.html.twig',[
        'title' => "Musée du Louvre - Accueil",
      ]);

    }

    /**
     * @Route("/form/new")
     */
    public function new(Request $request)
    {

        $form = $this->createForm();

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();

            $em->persist($article);
            $em->flush();
        }

        return $this->render('default/new.html.twig', array(
            'form' => $form->createView(),
        ));
    }

}
