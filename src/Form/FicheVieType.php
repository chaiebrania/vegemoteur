<?php

namespace App\Form;

use App\Entity\Piece;
use App\Entity\FicheVie;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\TextType;

class FicheVieType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
        ->add('Piece' , EntityType::class,[
            'label' =>'code',
            'class'=>Piece::class,
            'choice_label'=>'code',
            'placeholder'=>'--choisir--']) 
            ->add('date', DateType::class, ['label' => 'Date'])
            ->add('nateintervention', TextType::class, ['label' => 'Nature de l’intervention'])
            ->add('refdocument', TextType::class, ['label' => 'Réf. Document'])
            ->add('resultat', TextType::class, ['label' => 'Résultat'])
            ->add('visa', TextType::class, ['label' => 'Visa'])
           
      ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => FicheVie::class,
        ]);
    }
}
