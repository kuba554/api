<?php

namespace App\Form;

use App\Entity\ProductStock;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class ProductStockType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('stock_id')
            ->add('product_id')
            ->add('price')
            ->add('extended')
            ->add('price_type')
            ->add('active')
            ->add('default_stock')
            ->add('stock')
            ->add('warehouses')
            ->add('warn_level')
            ->add('sold')
            ->add('code')
            ->add('ean')
            ->add('weight')
            ->add('weight_type')
            ->add('availiability_id')
            ->add('delivery_id')
            ->add('gfx_id')
            ->add('options')
            ->add('package')
            ->add('price_wholesale')
            ->add('price_special')
            ->add('price_type_wholesale')
            ->add('price_type_special')
            ->add('price_buying')
            ->add('calculation_unit_id')
            ->add('calculation_unit_ratio')
            ->add('historical_lowest_price')
            ->add('wholesale_historical_lowest_price')
            ->add('special_historical_lowest_price')
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => ProductStock::class,
        ]);
    }
}
