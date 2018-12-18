<?php

namespace App\Forms;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\DateType;

class FormBillets extends AbstractType
{

    public function buildForm(FormBuilderInterface $builder,array $options)
    {
        $builder
        ->add('nom',TextType::class)
        ->add('prenom',TextType::class)
        ->add('birth', DateType::class, array(
          'label' => 'Date de naissance',
          'widget' => 'choice',))
        ->add('reduced_price', ChoiceType::class, array(
            'label'    => 'Tarif Réduit ',))
        ->getForm();
    }
}
