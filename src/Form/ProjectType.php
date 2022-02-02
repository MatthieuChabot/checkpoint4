<?php

namespace App\Form;

use App\Entity\Project;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class ProjectType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('name', TextType::class, [
                'label' => 'Nom du projet : ',
                'required' => true,
                'attr' => ['class' => ''],
            ])
            ->add('image', TextareaType::class, [
                'label' => "Lien de l'image du projet : ",
                'required' => true,
                'attr' => ['class' => ''],
            ])
            ->add('githubLink', TextareaType::class, [
                'label' => 'Lien GitHub du projet : ',
                'required' => true,
                'attr' => ['class' => ''],
            ])
            ->add('description', TextareaType::class, [
                'label' => 'Description du projet : ',
                'required' => true,
                'attr' => ['class' => ''],
            ])
            ->add('date', DateType::class, [
                'label' => 'Date de finition du projet : ',
                'required' => true,
                'attr' => ['class' => ''],
            ]);
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Project::class,
        ]);
    }
}
