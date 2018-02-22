<?php
/**
 * Created by PhpStorm.
 * User: ben
 * Date: 05/02/18
 * Time: 11:20
 */
// Création du edit le 05/02/18
namespace BC\PlatformBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;

class AdvertEditType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
      $builder->remove('date');
    }

    public function getParent()
    {
      return AdvertType::class;
    }
}