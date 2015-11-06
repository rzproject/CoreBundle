<?php

namespace Rz\CoreBundle\Form\Type;

use Symfony\Component\Form\AbstractTypeExtension;
use Symfony\Component\Form\FormInterface;
use Symfony\Component\Form\FormView;
use Symfony\Component\OptionsResolver\OptionsResolver;

class FileType extends AbstractTypeExtension
{
    /**
     * {@inheritdoc}
     *
     */
    public function buildView(FormView $view, FormInterface $form, array $options)
    {
        $view->vars['file_path'] = $options['file_path'] ? $options['file_path'] : null;
        $view->vars = array_replace($view->vars, array(
            'type'  => 'file',
            'value' => '',
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $optionalOptions = array('file_path');
        $resolver->setDefined($optionalOptions);
        $resolver->setDefaults(array('file_path' => null));
    }

    /**
     * {@inheritdoc}
     */
    public function getExtendedType()
    {
        return 'file';
    }
}
