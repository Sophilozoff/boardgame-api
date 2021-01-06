<?php

namespace App\Form;

use App\Entity\Boardgame;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextType;

class BoardgameType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('name',TextType::class, [
                'attr' => [
                    "class"=>"form-control my-2"
                ]])
            ->add('image',TextType::class, [
                'attr' => [
                    "class"=>"form-control my-2"
                ]])
            ->add('playersMin',TextType::class, [
                'attr' => [
                    "class"=>"form-control my-2"
                ]])
            ->add('playersMax',TextType::class, [
                'attr' => [
                    "class"=>"form-control my-2"
                ]])
            ->add('averageTime',TextType::class, [
                'attr' => [
                    "class"=>"form-control my-2"
                ]])
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Boardgame::class,
        ]);
    }
}
