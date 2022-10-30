<?php

namespace App\Form;

use App\Entity\Types;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;

class TypesFormType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('Group_', ChoiceType::class, ['choices' => ["Készülék üzemben van" => "1", "SIM-kártya üzemben van" => "2"], 'label' => 'Group:', 'attr' => array('onchange' => 'showData()')])
            ->add('Name', ChoiceType::class, ['label' => 'Name:', 'choices' => ["Raktáron van" => "raktáron van", "Kiszállítás folyamatban" => "kiszállítás folyamatban", "Partnernél van, de még nincs üzemben" => "partnernél van, de még nincs üzemben", "Szervizben van" => "szervizben van", "Ellopták" => "ellopták", "Elveszett" => "elveszett", "Üzemben van" => "üzemben van", "Megvették, de még nincs üzemben" => "megvették, de még nincs üzemben", "Készülékben van" => "készülékben van"]])
            ->add('Comment', TextType::class, ['label' => 'Comment:', 'required' => false])
            ->add('add', SubmitType::class, ['label' => 'Add New Type'])
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Types::class,
            'validation_groups' => false,
        ]);
    }
}
