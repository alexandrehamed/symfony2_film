<?php
namespace Cinema\AdminBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;

class FilmType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('Titre')
            ->add('Auteurs')
            ->add('Titre')
            ->add('Resume')
            ->add('sortie')
            ->add('save', SubmitType::class, array('label' => 'Enregistrer'))
        ;
    }
}