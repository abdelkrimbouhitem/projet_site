<?php

namespace App\Form;

use App\Entity\Category;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\TextType ;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;



class CategoryType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
        
        ->add('name',TextType::class,[
            'label' => 'Nom de la catégorie',
            'required' => false,
            'attr' => [
                'placeholder' => 'Ecrire ici le nom...'
            ]
        ])
        ->add('description',TextType::class,[
            'label' => 'discription de la catégorie',
            'required' => false,
            'attr' => [
                'placeholder' => 'Ecrire ici la discription'
            ]
        ])
        ->add('imagePath',TextType::class,[
            'label' => 'Image de la catégorie',
            'required' => false,
            'attr' => [
                'placeholder' => 'Ajouter le chemin de l\'image ici'
            ]
        ])
            ->add('createdAt',DateType::class,[
                'label' => 'date de creation',
                'required' => false,
                'attr' => [
                    'placeholder' => 'Ecrire ici la date..'
                ]
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Category::class,
        ]);
    }
}
