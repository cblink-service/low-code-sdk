<?php

namespace Cblink\Service\LowCodeSdk\Api;

use Cblink\Service\LowCodeSdk\Kernel\BaseApi;

class Client extends BaseApi
{
    /**
     * 获取应用模板列表
     *
     * @param array $query
     * @return array|\Psr\Http\Message\ResponseInterface|string
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function getAppTemplateList(array $query=[])
    {
        return $this->httpGet('/api/app/template', $query);
    }

    /**
     * 获取模板详情
     *
     * @param $id
     * @return array|\Psr\Http\Message\ResponseInterface|string
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function getAppTemplate($id)
    {
        return $this->httpGet(sprintf('/api/app/template/%s', $id));
    }

    /**
     * 创建应用模板
     *
     * @param array $query
     * @return array|\Psr\Http\Message\ResponseInterface|string
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function createAppTemplate(array $query=[])
    {
        return $this->httpPost('/api/app/template', $query);
    }

    /**
     * 编辑应用模板
     *
     * @param $id
     * @param array $query
     * @return array|\Psr\Http\Message\ResponseInterface|string
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function updateAppTemplate($id, array $query=[])
    {
        return $this->httpPut(sprintf('/api/app/template/%s', $id), $query);

    }

    /**
     * 发布模板
     *
     * @param $id
     * @param $query
     * @return array|\Psr\Http\Message\ResponseInterface|string
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function release($id, $query=[])
    {
        return $this->httpPost(sprintf('/api/app/template/%s/release', $id), $query);
    }

    /**
     * 删除模板
     *
     * @param $id
     * @return array|\Psr\Http\Message\ResponseInterface|string
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function destroyAppTemplate($id)
    {
        return $this->httpDelete(sprintf('/api/app/template/%s', $id));
    }

    /**
     * 创建应用模板配置
     *
     * @param array $query
     * @return array|\Psr\Http\Message\ResponseInterface|string
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function createAppTemplateConfig(array $query=[])
    {
        return $this->httpPost('/api/app/template/config', $query);
    }

    /**
     * 更新应用模板配置
     *
     * @param       $id
     * @param array $query
     *
     * @return array|\Psr\Http\Message\ResponseInterface|string
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function updateAppTemplateConfig($id, array $query=[])
    {
        return $this->httpPut(sprintf('/api/app/template/config/%s', $id), $query);
    }

    /**
     * 获取应用模板配置列表
     *
     * @param array $query
     *
     * @return array|\Psr\Http\Message\ResponseInterface|string
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function getAppTemplateConfigList(array $query=[])
    {
        return $this->httpGet('/api/app/template/config', $query);
    }

    /**
     * 获取应用模板配置
     *
     * @param $id
     *
     * @return array|\Psr\Http\Message\ResponseInterface|string
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function getAppTemplateConfig($id)
    {
        return $this->httpGet(sprintf('/api/app/template/config/%s', $id));
    }

    /**
     * 删除应用模板配置
     *
     * @param $id
     * @return array|\Psr\Http\Message\ResponseInterface|string
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function destroyAppTemplateConfig($id)
    {
        return $this->httpDelete(sprintf('/api/app/template/config/%s', $id));
    }

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

    /**
     * 获取已上线的装修配置详情
     *
     * @param string $id
     * @return array|\Psr\Http\Message\ResponseInterface|string
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function show(string $id, array $query=[])
    {
        return $this->httpGet(sprintf('/api/app/decoration/%s', $id), $query);
    }


    /**
     * 保存线上配置
     *
     * @param array $query
     * @return array|\Psr\Http\Message\ResponseInterface|string
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function createDecoration(array $query = [])
    {
        return $this->httpPost('/api/app/decoration', $query);
    }

    /**
     * 获取跳转链接
     *
     * @return string
     */
    public function getRedirectUrl()
    {
        return sprintf('%s/%s',
            rtrim($this->app->config->get('app_url'), '/'),
            'home',
        );
    }


}