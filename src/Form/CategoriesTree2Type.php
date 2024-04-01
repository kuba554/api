<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace App\Form;

use App\Entity\CategoriesTree;
use Doctrine\ORM\Mapping\Entity;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\CollectionType;
use App\Entity\Categories;
use Doctrine\ORM\EntityManagerInterface;

class CategoriesTree2Type extends AbstractType
{
    private $em;

    public function __construct(EntityManagerInterface $em)
    {
        $this->em = $em;
    }
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {   
        $arrayData = [];

        foreach($options['categories_all'] as $children) {
            $arrayData[] = $children->getChildren();
        }
        $test = $this->buildChoiceAttr($arrayData, 45);
        //$choiceAttr = $this->buildChoiceAttr($options['data']->getChildren());
        $builder
            ->add('children', ChoiceType::class, [
                'mapped' => false,
                'choices' => array_reduce($arrayData, function ($choices, $item) {
                    $category_name = [];
                    $category = $this->em->getRepository(Categories::class)->findAll(); 
                    foreach ($category as $item_translations) {
                        $translations = $item_translations->getTranslations();
                        $category_name[$translations['pl_PL']['category_id']] = $translations['pl_PL']['name'];
                    }
                    foreach ($item as $item_child) {
                        $choices[$category_name[$item_child['id']]] = $item_child['id'];              
                        foreach ($item_child['children'] as $child) {
                            if (isset($category_name[$child['id']])) {
                                $choices[$category_name[$child['id']]] = $child['id'];
                            }
                        }
                    }
                    return $choices;
                }, []), 
                'choice_attr' => $this->categoryName($arrayData),                                      
                'multiple' => true,
                'expanded' => true,
            ])                 
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => CategoriesTree::class,
            'categories_all' => false,
        ]);
    }

    private function buildChoiceAttr(array $categories, int $categories_id = 0, int $level = 0)
    {
        foreach ($categories as $category) {
            foreach ($category as $item) {  
                        if (isset($item['id']) == $categories_id) {
                            return $level;
                        }
                        if ($item['children'] != null) {
                            $depth = $this->buildChoiceAttr($item['children'], $categories_id, $level + 1);
                            if ($depth !== false) {
                                return $depth;
                            }
                        }
                    }
            }
        return false;
    }
    private function categoryName(array $arrayData): array {
        $category_name = [];
        $category = $this->em->getRepository(Categories::class)->findAll();
        foreach ($category as $item_translations) {
            $translations = $item_translations->getTranslations();
            $category_name[$translations['pl_PL']['name']] = [
                'data-level' => $this->buildChoiceAttr($arrayData, $translations['pl_PL']['category_id'])
            ];
        }
        return $category_name;
    }
}