<?php

namespace Rz\CoreBundle\Utils;

interface TemplateLoaderInterface
{
    /**
     * @param array $templates
     *
     * @return void
     */
    public function setTemplates(array $templates);

    /**
     * @return array
     */
    public function getTemplates();

    /**
     * @param string $name
     *
     * @return null|string
     */
    public function getTemplate($name);
}
