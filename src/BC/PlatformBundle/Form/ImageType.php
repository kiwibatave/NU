<?php

namespace BC\PlatformBundle\Form;

use Symfony\Component\Form\AbstractType;
// ajout d'un use pour le form
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class ImageType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            // motif du form avec l'utilisation de FILE
            ->add('file', FileType::class);
//            ->add('url', TextType::class)
//            ->add('alt', TextType::class);
    }
    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'BC\PlatformBundle\Entity\Image'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'bc_platformbundle_image';
    }


}
