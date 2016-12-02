<?php
/**
 * Created by PhpStorm.
 * User: Roman
 * Date: 02.12.2016
 * Time: 14:16
 */

namespace Onefit\ChatBundle\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;

class ProfileFormType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->remove('email');
        $builder->remove('current_password');
        $builder->remove('username');
        $builder->add('firstname');
        $builder->add('lastname');
    }

    public function getParent()
    {
        return 'FOS\UserBundle\Form\Type\ProfileFormType';

        // Or for Symfony < 2.8
        // return 'fos_user_registration';
    }

    public function getBlockPrefix()
    {
        return 'chat_user_profile';
    }

    // For Symfony 2.x
    public function getName()
    {
        return $this->getBlockPrefix();
    }

}