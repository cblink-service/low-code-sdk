<?php

namespace Cblink\Service\LowCodeSdk\Product;

use Pimple\Container;
use Pimple\ServiceProviderInterface;

class ServiceProvider implements ServiceProviderInterface
{
    public function register(Container $pimple)
    {
        $pimple['product'] = function($pimple){
            return new Client($pimple);
        };
    }
}