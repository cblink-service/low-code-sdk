<?php

namespace Cblink\Service\LowCodeSdk\Material;

use Cblink\Service\LowCodeSdk\Kernel\BaseApi;

class Client extends BaseApi
{
    /**
     * 素材列表
     *
     * @param array $query
     * @return mixed
     */
    public function list(array $query = [])
    {
        return $this->httpGet('/api/material', $query);
    }

    /**
     * 素材详情
     *
     * @param string $id
     * @return mixed
     */
    public function show(string $id, array $query = [])
    {
        return $this->httpGet(sprintf('/api/material/%s', $id), $query);
    }

    /**
     * 素材新增
     *
     * @param array $query
     * @return mixed
     */
    public function create(array $query = [])
    {
        return $this->httpPost('/api/material', $query);
    }

    /**
     * 素材编辑
     *
     * @param string $id
     * @param array $query
     * @return mixed
     */
    public function update(string $id, array $query = [])
    {
        return $this->httpPut(sprintf('/api/material/%s', $id), $query);
    }

    /**
     * 素材删除
     *
     * @param string $id
     * @return mixed
     */
    public function destroy(string $id, array $query = [])
    {
        return $this->httpDelete(sprintf('/api/material/%s', $id), $query);
    }

    /**
     * 根据分类 id 统计
     *
     * @param array $query
     * @return mixed
     */
    public function countByCategoryId(array $query = [])
    {
        return $this->httpGet('/api/material/count', $query);
    }

    /**
     * 分类列表
     *
     * @param array $query
     * @return mixed
     */
    public function categoryList(array $query = [])
    {
        return $this->httpGet('/api/material/category', $query);
    }

    /**
     * 分类详情
     *
     * @param int $id
     * @return mixed
     */
    public function categoryShow(int $id, array $query = [])
    {
        return $this->httpGet(sprintf('/api/material/category/%s', $id), $query);
    }

    /**
     * 分类创建
     *
     * @param array $query
     * @return mixed
     */
    public function categoryCreate(array $query = [])
    {
        return $this->httpPost('/api/material/category', $query);
    }

    /**
     * 分类编辑
     *
     * @param int $id
     * @param array $query
     * @return mixed
     */
    public function categoryUpdate(int $id, array $query = [])
    {
        return $this->httpPut(sprintf('/api/material/category/%s', $id), $query);
    }

    /**
     * 分类删除
     *
     * @param int $id
     * @return mixed
     */
    public function categoryDestroy(int $id, array $query = [])
    {
        return $this->httpDelete(sprintf('/api/material/category/%s', $id), $query);
    }

}