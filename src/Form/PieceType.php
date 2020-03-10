<?php

namespace App\Form;

use App\Entity\Piece;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\TextType;

class PieceType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('code', TextType::class, ['label' => 'Code'])
            ->add('designation', TextType::class, ['label' => 'Designation'])
            ->add('lecture', TextType::class, ['label' => 'Lecture'])
            ->add('preci', TextType::class, ['label' => 'Precision'])
            ->add('type', TextType::class, ['label' => 'Type'])
            ->add('Nserie', TextType::class, ['label' => 'N°Serie'])
            ->add('marque', TextType::class, ['label' => 'Marque'])
            ->add('section', TextType::class, ['label' => 'Section'])
            ->add('postetravaile', TextType::class, ['label' => 'Poste de travail'])
            ->add('date',  DateType::class, ['label' => 'Date mis en service'])
            ->add('frequencecalibrage', TextType::class, ['label' => 'Fréquence calibrage(j)'])
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Piece::class,
        ]);
    }
}
