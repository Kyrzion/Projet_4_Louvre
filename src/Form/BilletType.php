<?php

namespace App\Form;

use App\Entity\Billet;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\HiddenType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\CountryType;
use Symfony\Component\Form\Extension\Core\Type\CollectionType;
use Symfony\Component\Form\FormBuilder;
use App\Entity\Commande;
use App\Form\CommandeType;

class BilletType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('nom', TextType::class)
            ->add('prenom', TextType::class)
            ->add('dateNaissance', DateType::class, array(
                'label' => 'Date de naissance',
                'widget' => 'single_text',
                'attr' => ['class' => 'js-datepicker'],
                'html5' => false,))
            ->add('pays', CountryType::class, [
                'label' => 'Pays',
                'placeholder' => 'Choisir un pays',
            ])

            ->add('reduction', ChoiceType::class, array(
                'label' => 'Tarif Réduit ',
                'choices' => array(
                    'Tarif Normal' => false,
                    'Tarif Etudiant/Militaire' => true,),
            ));
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Billet::class,
        ]);
    }
}
