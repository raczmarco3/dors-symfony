<?php

namespace App\Form;

use App\Entity\SIMCards;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\DateType;

class SimCardsFormType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $this->phonesOptions = $options['phonesOptions'];
        $this->carriersOptions = $options['carriersOptions'];
        $this->typesOptions = $options['typesOptions'];

        $builder
            ->add('PhoneID', ChoiceType::class, ['label' => 'Phone', 'choices' => $this->phonesOptions])
            ->add('Slot', IntegerType::class, ['label' => 'Slot:'])
            ->add('MobileNumber', TextType::class, ['label' => 'MobileNumber:'])
            ->add('IMSI', TextType::class, ['label' => 'IMSI:'])
            ->add('Expiration', DateType::class, ['label' => 'Expiration:', 'widget' => 'single_text', 'format' => 'yyyy-MM-dd'])
            ->add('MobilnetExpiration', DateType::class, ['label' => 'MobilnetExpiration:', 'widget' => 'single_text', 'format' => 'yyyy-MM-dd'])
            ->add('MobilnetDataLimit', IntegerType::class, ['label' => 'MobilnetDataLimit:'])
            ->add('MobilnetIP', TextType::class, ['label' => 'MobilnetIP:'])
            ->add('CarrierID', ChoiceType::class, ['label' => 'Carrier:', 'choices' => $this->carriersOptions])
            ->add('Package', TextType::class, ['label' => 'Package:'])
            ->add('TypeID', ChoiceType::class, ['label' => 'Type:', 'choices' => $this->typesOptions])
            ->add('Activated', IntegerType::class, ['label' => 'Activated:'])
            ->add('Comment', TextType::class, ['label' => 'Comment:', 'required' => false])
            ->add('add', SubmitType::class, ['label' => 'Add New SIM'])
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => SIMCards::class,
            'phonesOptions' => [],
            'carriersOptions' => [],
            'typesOptions' => []
        ]);
    }
}
