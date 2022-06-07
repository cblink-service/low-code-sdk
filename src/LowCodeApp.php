<?php

namespace CblinkService\LowCodeSdk;

use Cblink\Service\Foundation\Container;
use Hyperf\Utils\Collection;

/**
 * @property-read Collection $config
 * @property-read \GuzzleHttp\Client $client
 * @property-read \Cblink\Service\Foundation\AccessToken $access_token
 *
 * @property-read Api\Client $api       api接口
 * @property-read Product\Client $product       商品
 */
class LowCodeApp extends Container
{
    protected $providers = [
        Kernel\ServiceProvider::class,
        Api\ServiceProvider::class,
        Product\ServiceProvider::class,
    ];
}