<?php

namespace Rz\CoreBundle\Twig\Extension;

use Rz\CoreBundle\Utils\TemplateLoaderInterface;

class TemplateLoaderExtension extends \Twig_Extension
{
    /**
     * @var \Twig_Environment
     */
    protected $environment;

    /**
     * @var \Rz\CoreBundle\Utils\TemplateLoaderInterface
     */
    protected $loader;

    /**
     * @param \Rz\CoreBundle\Utils\TemplateLoaderInterface $loader
     */
    public function __construct(TemplateLoaderInterface $loader)
    {
        $this->loader = $loader;
    }

    /**
     * {@inheritdoc}
     */
    public function initRuntime(\Twig_Environment $environment)
    {
        $this->environment = $environment;
    }

    /**
     * Returns a list of functions to add to the existing list.
     *
     * @return array An array of functions
     */
    public function getFunctions()
    {
        return array(
             new \Twig_SimpleFunction('rz_core_get_template', array($this, 'getTemplate')),
        );
    }

    /**
     * {@inheritDoc}
     */
    public function getName()
    {
        return 'rz_core_template_loader';
    }

    /**
     * @param $name
     *
     * @throws \Exception|\Twig_Error_Loader
     * @return \Twig_TemplateInterface
     */
    public function getTemplate($name)
    {
        dump($name);
        $templateName = $this->loader->getTemplate($name);
        try {
            $template = $this->environment->loadTemplate($templateName);
        } catch (\Twig_Error_Loader $e) {
            throw $e;
        }

        return $template;
    }
}
