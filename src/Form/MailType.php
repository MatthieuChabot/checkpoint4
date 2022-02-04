<?php

namespace App\Form;

use App\Entity\Mail;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class MailType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('firstName', TextType::class, [
                'label' => 'Prénom : ',
                'required' => true,
                'attr' => ['class' => ''],
            ])
            ->add('lastName', TextType::class, [
                'label' => 'Nom : ',
                'required' => true,
                'attr' => ['class' => ''],
            ])
            ->add('email', TextType::class, [
                'label' => 'Email : ',
                'required' => true,
                'attr' => ['class' => ''],
            ])
            ->add('demande', TextareaType::class, [
                'label' => 'Demande : ',
                'required' => true,
                'attr' => ['class' => ''],
            ]);
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Mail::class,
        ]);
    }
}
