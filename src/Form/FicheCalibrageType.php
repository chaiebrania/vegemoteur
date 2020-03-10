<?php

namespace App\Form;

use App\Entity\Piece;
use App\Entity\FicheCalibrage;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\TextType;

class FicheCalibrageType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
        ->add('Piece' , EntityType::class,[
            'label' =>'Code piece',
            'class'=>Piece::class,
            'choice_label'=>'code',
            'placeholder'=>'--choisir--'])
            ->add('section', TextType::class, ['label' => 'section'])
            ->add('calibragepar', TextType::class, ['label' => 'Calibrage par'])
            ->add('date', DateType::class, ['label' => 'Date'])
            ->add('conforme', TextType::class, ['label' => 'Conforme'])
            ->add('ajusterconforme', TextType::class, ['label' => 'Ajuster conforme'])
            ->add('ajusternonconforme', TextType::class, ['label' => 'Ajuster non conforme'])
            ->add('freq', TextType::class, ['label' => 'Frequence'])
            ->add('classe', TextType::class, ['label' => 'Classe'])
            ->add('remarque', TextType::class, ['label' => 'Remarque'])
            ->add('m1', TextType::class, ['label' => 'mesure'])
            ->add('m2', TextType::class, ['label' => 'ecart'])
            ->add('m3', TextType::class, ['label' => 'mesure'])
            ->add('m4', TextType::class, ['label' => 'ecart'])
            ->add('m5', TextType::class, ['label' => 'mesure'])
            ->add('m6', TextType::class, ['label' => 'ecart'])
            ->add('m7', TextType::class, ['label' => 'mesure'])
            ->add('m8', TextType::class, ['label' => 'ecart'])
            ->add('m9', TextType::class, ['label' => 'mesure'])
            ->add('m10', TextType::class, ['label' => 'ecart'])
          
         ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => FicheCalibrage::class,
        ]);
    }
}
