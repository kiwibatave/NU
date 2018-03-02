<?php

namespace BC\PlatformBundle\Form;

use BC\PlatformBundle\Repository\CategoryRepository;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use Symfony\Component\Form\Extension\Core\Type\DateTimeType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
// Ajout des use pour le listener 05/02/18
use Symfony\Component\Form\FormEvent;
use Symfony\Component\Form\FormEvents;
use Symfony\Component\OptionsResolver\OptionsResolver;

class AdvertType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        // Motif avec pattern 05/02/18
        // Test récup catégories qui commencent par C
        $pattern = '';

        $builder
            ->add('date', DateTimeType::class, array(
//                'label' => false
            ))
            ->add('title', TextType::class, array(
                'label' => 'Titre de votre annonce'
            ))
            ->add('author', TextType::class, array(
                'label' => 'Auteur de l\'annonce'
            ))
            ->add('content', TextareaType::class, array(
                'label' => 'Présentation de votre annonce'
            ))
            // On supprime le pusblished qui sert fait par le listener event 05/02/18
//            ->add('published', CheckboxType::class)
            ->add('image', ImageType::class, array(
                'label' => 'Choisissez une photo pour illustrer votre annonce'
            ))
            // Ajout de la classe image après la création du Imagetype 02/02/18
            // On ajoute les catégories avec plusieurs argus : nom, type et un tableau
            // Modif du 05/02/18
//            ->add('categories', EntityType::class, array(
//                'class' => 'BCPlatformBundle:Category',
//                'choice_label' => 'name',
//                'multiple' => true,
//                // modif pattern 05/02/18
//                'query_builder' => function (CategoryRepository $repository) use ($pattern) {
//                    return $repository->getLikeQueryBuilder($pattern);
//                }))
            // modif datepicker 21/02/18
            ->add('startdate', DateTimeType::class, array(
                'widget' => 'single_text',
                'label' => false,
                'html5' => false,
                'format' => 'dd-MM-yyyy'
            ))
            ->add('enddate', DateTimeType::class, array(
                'label' => false,
                'html5' => false,
                'format' => 'dd-MM-yyyy',
                'widget' => 'single_text'
            ))
            //ajout de la ville
            -> add('city', TextType::class,array(
                'label' => 'Ville',
            ))
            // fin modif datepicker
            ->add('save', SubmitType::class);

        // Ajout d'une fonction listerner event 05/02/18
        $builder->addEventListener(
            FormEvents::PRE_SET_DATA, // 1er argument PRE_SET_DATA
            function (FormEvent $event) { // 2eme argument : fonction à executer lorsque l'évent est déclenché
                // On récupère notre objet Advert
                $advert = $event->getData();

                // CONDITION IMPORTANTE (voir après)
                if (null === $advert) {
                    return; // sortie de la fonction sans rien faire
                }

                // Si l'annonce n'est pas published ou si pas dans le bdd (id est null)
                if (!$advert->getPublished() || null === $advert->getId()) {
                    // Alors on ajoute le champ published
                    $event->getForm()->add('published', CheckboxType::class, array(
                        'required' => false,
                        'label' => 'Publier',
                        ));
                } else {
                    // Sinon on supprime
                    $event->getForm()->remove('published');
                }
            }
        );
    }

    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'BC\PlatformBundle\Entity\Advert'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'bc_platformbundle_advert';
    }
}