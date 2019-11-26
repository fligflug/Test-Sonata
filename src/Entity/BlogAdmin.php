<?php

namespace App\Entity;

use Sonata\AdminBundle\Admin\AbstractAdmin;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Form\FormMapper;
use Sonata\AdminBundle\Form\Type\ModelType;
use Sonata\Form\Type\BooleanType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Vich\UploaderBundle\Form\Type\VichImageType;

final class BlogAdmin extends AbstractAdmin
{
    /**
     * @param FormMapper $formMapper
     */
    protected function configureFormFields(FormMapper $formMapper)
    {
        $formMapper->with('admin.crud.blog.new', ['class' => 'col-md-9'])
            ->add('title', TextType::class, ['label' => 'admin.crud.blog.title'])
            ->add('body', TextareaType::class, ['label' => 'admin.crud.blog.body']);
            if($this->isCurrentRoute('create')) {
                $formMapper->add('imageFile', VichImageType::class, [
                    'label' => 'admin.crud.blog.image',
                    'required'=> true,
                    'allow_delete' => false,
                ]);
            } else {
                $formMapper->add('imageFile', VichImageType::class, [
                    'label' => 'admin.crud.blog.image',
                    'required'=> false,
                    'allow_delete' => false,
                ]);
            }
            $formMapper->add('draft', BooleanType::class, ['label' => 'admin.crud.blog.draft'])
            ->end();
        $formMapper->with('admin.crud.blog.category', ['class' => 'col-md-3'])
            ->add('category', ModelType::class, [
                'class' => Category::class,
                'property' => 'name',
                'label' => 'admin.crud.blog.category'
            ])
            ->end();
    }

    protected function configureDatagridFilters(DatagridMapper $datagridMapper)
    {
        $datagridMapper->add('title', null, ['label' => 'admin.crud.blog.title']);
    }

    protected function configureListFields(ListMapper $listMapper)
    {
        $listMapper->add('image', 'image', [
            'base_path' => '/medias/uploads/blog',
            'label' => 'admin.crud.blog.image',
            'template' => 'admin/image.html.twig'
        ]);
        $listMapper->addIdentifier('title', null, ['label' => 'admin.crud.blog.title']);
        $listMapper->addIdentifier('draft', null, ['label' => 'admin.crud.blog.draft']);
        $listMapper->addIdentifier('category', null, ['label' => 'admin.crud.blog.category']);
    }
}
