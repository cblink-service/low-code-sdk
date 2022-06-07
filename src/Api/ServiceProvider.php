<?php

namespace CblinkService\LowCodeSdk\Api;

use Pimple\Container;
use Pimple\ServiceProviderInterface;

class ServiceProvider implements ServiceProviderInterface
{
    public function register(Container $pimple)
    {
        $pimple['api'] = function($pimple){
            return new Client($pimple);
        };
    }
}