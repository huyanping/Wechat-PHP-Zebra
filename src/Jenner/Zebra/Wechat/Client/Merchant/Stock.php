<?php
/**
 * Created by PhpStorm.
 * User: Jenner
 * Date: 14-12-15
 * Time: 上午10:46
 */

namespace Jenner\Zebra\Wechat\Client\Merchant;


use Jenner\Zebra\Wechat\WechatUri;

class Stock extends Merchant
{
    /**
     * 增加库存
     * @param $product_id
     * @param $quantity
     * @param $sku_info
     * @return bool|mixed
     */
    public function add($product_id, $quantity, $sku_info)
    {
        $uri = $this->uri_prefix . WechatUri::MERCHANT_STOCK_ADD;
        $params = [
            'product_id' => $product_id,
            'quantity' => $quantity,
            'sku_info' => $sku_info,
        ];
        return $this->request_post($uri, $params);
    }

    /**
     * 减少库存
     * @param $product_id
     * @param $quantity
     * @param $sku_info
     * @return bool|mixed
     */
    public function reduce($product_id, $quantity, $sku_info)
    {
        $uri = $this->uri_prefix . WechatUri::MERCHANT_STOCK_REDUCE;
        $params = [
            'product_id' => $product_id,
            'quantity' => $quantity,
            'sku_info' => $sku_info,
        ];
        return $this->request_post($uri, $params);
    }


} 