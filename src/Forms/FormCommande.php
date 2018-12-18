<?php

namespace App\Forms;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractType;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\HiddenType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\CollectionType;


class FormController extends AbstractType
{
    public function index(/*Request $request,ObjectManager $manager*/)
    {
      
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


}
}
