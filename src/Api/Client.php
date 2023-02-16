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

    /**
     * 复制模板
     *
     * @param $id
     * @param array $data
     * @return array|\Psr\Http\Message\ResponseInterface|string
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function copyTemplate($id, array $data=[])
    {
        return $this->httpPost(sprintf('/api/app/template/%s/copy', $id), $data);
    }
    /**
     * 使用模板
     *
     * @param $id
     * @param array $data
     * @return array|\Psr\Http\Message\ResponseInterface|string
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function useTemplate($id, array $data=[])
    {
        return $this->httpPost(sprintf('/api/app/template/%s/use', $id), $data);
    }

    /**
     * 编辑模板状态
     *
     * @param $id
     * @param array $data
     * @return array|\Psr\Http\Message\ResponseInterface|string
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function updateStatusTemplate($id, array $data=[])
    {
        return $this->httpPut(sprintf('/api/app/template/%s/status', $id), $data);
    }

    /**
     * 模板分类列表
     *
     * @param array $query
     * @return array|\Psr\Http\Message\ResponseInterface|string
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function getCategoryList(array $query)
    {
        return $this->httpGet('/api/app/template/category', $query);
    }

    /**
     * 模板分类详情
     *
     * @param int $id
     * @return array|\Psr\Http\Message\ResponseInterface|string
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function getCategory(int $id)
    {
        return $this->httpGet(sprintf('/api/app/template/category/%s', $id));
    }

    /**
     * 创建分类
     *
     * @param array $data
     * @return array|\Psr\Http\Message\ResponseInterface|string
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function createCategory(array $data)
    {
        return $this->httpPost('/api/app/template/category');
    }

    /**
     * 编辑分类
     *
     * @param array $data
     * @return array|\Psr\Http\Message\ResponseInterface|string
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function updateCategory(int $id, array $data)
    {
        return $this->httpPut(sprintf('/api/app/template/category/%s', $id), $data);
    }

    /**
     * 编辑分类状态
     *
     * @param int $id
     * @return array|\Psr\Http\Message\ResponseInterface|string
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function updateCategoryStatus(int $id)
    {
        return $this->httpPut(sprintf('/api/app/template/category/%s/status', $id));
    }

    /**
     * 删除分类
     *
     * @param int $id
     * @return array|\Psr\Http\Message\ResponseInterface|string
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function deleteCategory(int $id)
    {
        return $this->httpDelete(sprintf('/api/app/template/category/%s', $id));
    }

}