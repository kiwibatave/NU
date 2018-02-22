<?php
/**
 * Created by PhpStorm.
 * User: ben
 * Date: 12/02/18
 * Time: 15:16
 */
namespace BC\PlatformBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\OptionsResolver\OptionsResolver;

class CkeditorType extends AbstractType
{
    public function configureOptions(OptionsResolver $resolver)
    {
       $resolver->setDefaults(array(
           'attr' => array('class' => 'ckeditor') // Rajout classe CSS
       ));
    }

    public function getParent() // Héritage form
    {
       return TextareaType::class;
    }
}
