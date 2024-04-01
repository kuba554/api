<?php

namespace App\Form;

use App\Entity\Producers;
use App\Entity\Product;
use App\Entity\Attributes;
use App\Entity\Categories;
use App\Entity\Taxes;
use App\Entity\Units;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\HiddenType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use FOS\CKEditorBundle\Form\Type\CKEditorType;
use Symfony\UX\Dropzone\Form\DropzoneType;
use App\Entity\Deliveries;

class ProductType extends AbstractType
{
    private $entityManager;

    public function __construct(EntityManagerInterface $entityManager)
    {
        $this->entityManager = $entityManager;
    }
    
    public function buildForm(FormBuilderInterface $builder, array $options): void
{ 
        $stock = $options['data'];
        $stock = $stock->getStock();
        if(isset($stock['active'])) {
            $active = (bool)$stock['active'];
        }

        $producers = $this->entityManager->getRepository(Producers::class)->findAll();
        $categories = $this->entityManager->getRepository(Categories::class)->findAll();

        $producerChoices = [];
        foreach ($producers as $producer) {
            $producerChoices[$producer->getName()] = $producer->getId();
        }
        $categoryChoices =[];
        foreach ($categories as $category) {
            $categoryName = $category->getTranslations();
            $categoryChoices[$categoryName['pl_PL']['name']] = $category->getCategoryId();
        }
        
        $builder
            ->add('product_type', ChoiceType::class, [
                'mapped' => false,
                'choices' => [
                    'Produkt prosty' => true,
                    'Produkt z wariantami' => false,
                ],
                'label' => 'Typ produktu'
            ])
            ->add('product_id', HiddenType::class, [
                'data' => $options['data']->getProductId(),
            ])
            // ->add('image', DropzoneType::class, [
            //     'label'=> 'Dodaj zdjęcie główne:',
            //     'mapped' => false,
            // ])
            ->add('name', TextType::class, [
                'label' => 'Nazwa'
            ])
            ->add('SKU')
            ->add('EAN')
            ->add('producer_id', ChoiceType::class, [
                'choices' => $producerChoices,
                'label' => 'Producent'
            ])
            ->add('stock_active', CheckboxType::class, [
                'data' => isset($active) ? $active : false,
                'label' => 'Aktywność',
                'required' => false,
            ])
            ->add('stock_weight', NumberType::class, [
                'data' => isset($stock['weight']) ? (float)$stock['weight'] : 0,
                'label' => 'Waga',
            ])
            ->add('price_wholesale', NumberType::class, [
                'label' => 'Cena hurtowa',
            ])
            ->add('price_suggested', NumberType::class, [
                'label' => 'Cena sugerowana',
            ])
            ->add('stock_stock', NumberType::class, [
                'label' => 'Stan magazynowy',
                'data' => isset($stock['stock']) ? $stock['stock'] : 0,
            ])
            ->add('description', CKEditorType::class, [
                'label' => ' ',
                'config' => [
                    'toolbar' => 'full',
                    'width' => '100%', 
                    'height' => '400px',
                    ]
                ])
            ->add('taxes', EntityType::class, [
                'class' => Taxes::class,
                'choice_label' => 'name',
                'label' => 'Vat',
                // 'choice_value' => 'tax_id',
                'mapped' => false,
            ])
            ->add('units', EntityType::class, [
                'class' => Units::class,
                'mapped' => false,
                'choice_label' => function ($unit) {
                    $translations = $unit->getTranslations();
                    return $translations['pl_PL']['name'] ?? ''; 
                },
                'label' => 'Jednostka miary'
            ])
            ->add('delivery_time', EntityType::class, [
                'class' => Deliveries::class,
                'label' => 'Czas dostawy',
                'mapped' => false,
                'choice_label' => function ($deliveries) {
                    $translations = $deliveries->getTranslations();
                    return $translations['pl_PL']['name'];
                },
            ])
            ->add('category_id', ChoiceType::class, [
                'choices' => $categoryChoices,
                'label' => 'Kategoria główna',
            ])         
            ->add('attributes1', ChoiceType::class, [
                'mapped' => false,
                'choices' => $this->getAttributesChoices(2, 20),
                'label' => 'KAMUFLAŻ I KOLOR',
                'multiple' => true,
                'choice_attr' => function($choice, $key, $value) {
                    return ['name' => $key];
                },
            ])
            ->add('attributes2', ChoiceType::class, [
                'mapped' => false,
                'choices' => $this->getAttributesChoices(2, 24),
                'label' => 'MATERIAŁ DOMINUJĄCY',
                'multiple' => true,
                'choice_attr' => function($choice, $key, $value) {
                    return ['name' => $key];
                },
            ])
            ->add('attributes3', ChoiceType::class, [
                'mapped' => false,
                'choices' => $this->getAttributesChoices(1),
                'label' => 'WŁAŚCIWOŚCI',
                'multiple' => true,
                'choice_attr' => function($choice, $key, $value) {
                    return ['name' => $key];
                },
            ]);
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Product::class,
        ]);
    }

    public function getAttributesChoices($type, $id = 0)
    {
        $attributes = $this->entityManager->getRepository(Attributes::class)->findAll();

        $choices = [];
        foreach ($attributes as $attribute) {
            $attributeId = $attribute->getAttributeId();
            $attributeName = $attribute->getName();
            $attributeType = $attribute->getType();
            $attributeOptions = $attribute->getOptions();

            // Jeśli atrybut jest typu 1, użyj go bez opcji
            if ($attributeType == $type && $id == 0) {
                $choices[$attributeName] = $attributeId;
            }
            // Jeśli atrybut jest typu 2, użyj opcji jako wartości
            if ($attributeType == $type && $attributeId == $id) {
                foreach ($attributeOptions as $option) {
                    $choices[$option['value']] = $option['option_id'];
                }
            }
        }
        return $choices;
    }
}
