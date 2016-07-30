<?php

namespace Rz\CoreBundle\Utils;

use Rz\CoreBundle\Utils\TemplateLoaderInterface;

class TemplateLoader implements TemplateLoaderInterface
{
    protected $templates    = [];

    /**
     * @param array $templates
     *
     * @return void
     */
    public function setTemplates(array $templates)
    {
        $this->templates = array_merge($this->templates, $templates);
    }

    /**
     * @return array
     */
    public function getTemplates()
    {
        return $this->templates;
    }

    /**
     * @param string $name
     *
     * @return null|string
     */
    public function getTemplate($name)
    {
        if (isset($this->templates[$name])) {
            return $this->templates[$name];
        }
        return null;
    }
}
