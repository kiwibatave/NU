<?php
//
//namespace BC\PlatformBundle\Form;
//
//use Symfony\Component\Form\AbstractType;
//// ajout du use utilisé dans notre form category
//use Symfony\Component\Form\Extension\Core\Type\TextType;
//use Symfony\Component\Form\FormBuilderInterface;
//use Symfony\Component\OptionsResolver\OptionsResolver;
//
//class CategoryType extends AbstractType
//{
//    /**
//     * {@inheritdoc}
//     */
//    public function buildForm(FormBuilderInterface $builder, array $options)
//    {
//        $builder
//            ->add('name', TextType::class);
//    }
//    /**
//     * {@inheritdoc}
//     */
//    public function configureOptions(OptionsResolver $resolver)
//    {
//        $resolver->setDefaults(array(
//            'data_class' => 'BC\PlatformBundle\Entity\Category'
//        ));
//    }
//
//    /**
//     * {@inheritdoc}
//     */
//    public function getBlockPrefix()
//    {
//        return 'bc_platformbundle_category';
//    }
//
//
//}
