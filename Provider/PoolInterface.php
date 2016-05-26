<?php

namespace Rz\CoreBundle\Provider;

interface PoolInterface
{
    public function getProvider($name);

    public function addProvider($name, ProviderInterface $instance);

    public function setProviders($providers);

    public function getProviders();

    public function addGroup($name, $provider = null);

    public function hasGroup($name);

    public function getGroup($name);

    public function getGroups();

    public function getDefaultGroup();

    public function getProviderNameByGroup($name);
}
