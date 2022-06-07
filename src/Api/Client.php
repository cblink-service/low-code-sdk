<?php

namespace CblinkService\LowCodeSdk\Api;

use CblinkService\LowCodeSdk\Kernel\BaseApi;

class Client extends BaseApi
{

    /**
     * 获取已上线的装修配置
     *
     * @param array $query
     * @return array|\Psr\Http\Message\ResponseInterface|string
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function lists(array $query = [])
    {
        return $this->httpGet('/api/app/decoration', $query);
    }


}