<?php
namespace Cinema\AdminBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;

class PersonneType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('Realisateur')
            ->add('Nom')
            ->add('date')
            ->add('save', SubmitType::class, array('label' => 'Enregistrer'))
        ;
    }
}