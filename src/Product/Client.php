<?php

namespace Cblink\Service\LowCodeSdk\Product;

use Cblink\Service\LowCodeSdk\Kernel\BaseApi;

class Client extends BaseApi
{
    /**
     * 分类列表
     *
     * @param array $query
     * @return array|\Psr\Http\Message\ResponseInterface|string
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function getCategoryList(array $query=[])
    {
        return $this->httpGet('/api/product/category-list', $query);
    }
    /**
     * 商品列
     *
     * @param array $query
     * @return array|\Psr\Http\Message\ResponseInterface|string
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function getList(array $query=[])
    {
        return $this->httpGet('/api/product', $query);
    }

    /**
     * sku 列表
     *
     * @param array $query
     * @return array|\Psr\Http\Message\ResponseInterface|string
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function getSkuList(array $query=[])
    {
        return $this->httpGet('/api/product/sku-list', $query);
    }

}