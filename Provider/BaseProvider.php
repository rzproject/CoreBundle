<?php

namespace Rz\CoreBundle\Provider;

use Sonata\CoreBundle\Validator\ErrorElement;

abstract class BaseProvider implements ProviderInterface
{
    protected $name;
    protected $translator;

    /**
     * @param string                                           $name
     */
    public function __construct($name)
    {
        $this->name          = $name;
    }

    public function setName($name)
    {
        $this->name = $name;
    }

    public function getName()
    {
        return $this->name;
    }

    public function getTranslator()
    {
        return $this->translator;
    }

    public function setTranslator($translator)
    {
        $this->translator = $translator;
    }
}
