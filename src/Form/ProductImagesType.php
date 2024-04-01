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

use App\Entity\ProductImages;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\HiddenType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\UX\Dropzone\Form\DropzoneType;
use Symfony\Component\Form\FormEvents;
use Symfony\Component\Form\FormEvent;

class ProductImagesType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('name', DropzoneType::class, [
                'mapped' => false,
                'label' => 'Dodaj zdjęcie',
            ])
            // ->add('gfx_id')
            ->add('product_id', HiddenType::class)
            //->add('order_sord')
            //->add('unic_name')
            //->add('hidden')
            // ->add('extension')
            // ->add('translations')
        // $builder->addEventListener(FormEvents::SUBMIT, function (FormEvent $event) {
        //     $form = $event->getForm();
        //     $data = $event->getData();
        //     print_r($form['name']->getData());

        //     // Przetwarzanie pliku, pobranie nazwy z rozszerzeniem itp.
        //     $uploadedFile = $form['name']->getData();
        //     $originalFilename = pathinfo($uploadedFile->getClientOriginalName(), PATHINFO_FILENAME);
        //     $newFilename = $originalFilename.'.'.$uploadedFile->guessExtension();

        //     // Zapisanie nazwy pliku do encji ProductImages
        //     $data->setName($newFilename);
        // });
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => ProductImages::class,
        ]);
    }
}
