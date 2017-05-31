<?php

namespace Laraver\Waimai\Eleme\Packs;

use Illuminate\Support\Collection;
use Laraver\Waimai\Eleme\Core\Api;

class Packs extends Api
{
    /**
     * 查询店铺当前生效合同类型.
     *
     * @param $shopId
     *
     * @return array
     */
    public function getEffectServicePackContract($shopId)
    {
        $result = $this->parseJSON('eleme.packs.getEffectServicePackContract', ['shopId' => $shopId]);

        return $result;
    }
}
