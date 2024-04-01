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
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Doctrine\ORM\EntityManagerInterface;

class CategoriesTreeType extends AbstractType
{
    private $em;
    public function __construct(EntityManagerInterface $em)
    {
        $this->em = $em;
    }
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $sampleArray = array(
            'name' => 'John Doe',
            'age' => 30,
            'email' => 'john@example.com',
            'is_active' => true,
            'address' => array(
                'street' => '123 Main Street',
                'city' => 'Anytown',
                'country' => 'USA'
            ),
            'friends' => array(
                'Alice',
                'Bob',
                'Charlie'
            )
        );
        

        // foreach($tree as $item) {
        //     if ($item->getChildren() != null) {
        //         foreach($item->getChildren() as $item) {
        //             $id_children = $item['children'];
        //             print_r($id_children);
        //             // $id_children = $id_children['id'];
        //             $array_tree[$item['id']][$id_children] = $item['id'];
        //         }
        //     } else {
        //         $array_tree[$item->getId()] = null;
        //     }
        // }
        $builder
            ->add('tree_id')
            ->add('children', ChoiceType::class, [
                'choices' => 'cos', 
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => CategoriesTree::class,
        ]);
    }
}
