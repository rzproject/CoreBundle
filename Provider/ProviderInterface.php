<?php

namespace Rz\CoreBundle\Provider;

use Sonata\CoreBundle\Validator\ErrorElement;

interface ProviderInterface
{
    public function setName($name);

    public function getName();

    public function getTranslator();

    public function setTranslator($translator);

    /**
     * @return mixed
     */
    public function getSlugify();

    /**
     * @param mixed $slugify
     */
    public function setSlugify($slugify);
}
