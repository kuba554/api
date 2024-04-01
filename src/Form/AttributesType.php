<?php

namespace App\Form;

use App\Entity\Attributes;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class AttributesType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('attribute_id')
            ->add('name')
            ->add('description')
            ->add('attribute_group_id')
            ->add('order_sort')
            ->add('type')
            ->add('active')
            ->add('default_value')
            ->add('options')
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Attributes::class,
        ]);
    }
}
