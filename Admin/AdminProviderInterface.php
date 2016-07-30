<?php

namespace Rz\CoreBundle\Admin;

use Rz\CoreBundle\Provider\PoolInterface;

interface AdminProviderInterface
{
    public function fetchProviderKey();

    public function getPoolProvider(PoolInterface $pool);

    public function getProviderName(PoolInterface $pool, $providerKey = null);
}
