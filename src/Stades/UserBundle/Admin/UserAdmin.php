<?php

namespace Stades\UserBundle\Admin;

use Sonata\AdminBundle\Admin\Admin;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Form\FormMapper;
use Sonata\AdminBundle\Show\ShowMapper;

class UserAdmin extends Admin
{
    protected function configureFormFields(FormMapper $formMapper)
    {
        $formMapper
            ->add('username')
            ->add('email' )
            ->add('locked')
            ->add('roles', 'choice',
                array('choices'=>
                    array('ROLE_USER' => 'Utilisateur',
                        'ROLE_SUPER_ADMIN' => 'Administrateur'),
                    'expanded'=> true,
                    'multiple'=> true));

    }

    protected function configureDatagridFilters(DatagridMapper $datagridMapper)
    {
        $datagridMapper
            ->add('username')
            ->add('email')
            ->add('lastLogin')
            ->add('locked')
            ->add('roles')
        ;
    }

    protected function configureListFields(ListMapper $listMapper)
    {
        $listMapper
            ->add('id')
            ->addIdentifier('username')
            ->add('email')
            ->add('locked')
            ->add('lastLogin')
            ->add('roles')

        ;


    }

    protected function configureShowFields(ShowMapper $showMapper)
    {
        $showMapper
            ->add('username')
            ->add('email')
            ->add('locked')
            ->add('lastLogin')
            ->add('roles')
        ;
    }
}
