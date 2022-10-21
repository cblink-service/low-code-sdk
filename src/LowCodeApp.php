<?php

namespace Cblink\Service\LowCodeSdk;

use Cblink\Service\Foundation\Container;
use Hyperf\Utils\Collection;

/**
 * @property-read Collection $config
 * @property-read \GuzzleHttp\Client $client
 * @property-read \Cblink\Service\Foundation\AccessToken $access_token
 *
 * @property-read Api\Client $api       api接口
 * @property-read Product\Client $product       商品
 * @property-read Material\Client $material     素材
 */
class LowCodeApp extends Container
{
    protected array $providers = [
        Kernel\ServiceProvider::class,
        Api\ServiceProvider::class,
        Product\ServiceProvider::class,
        Material\ServiceProvider::class,
    ];
}