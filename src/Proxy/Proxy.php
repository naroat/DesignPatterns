<?php

/**
 * 代理模式
 */

//抽象商品
abstract class Goods {
    abstract public function getPrice();
}

//商品
class RealGoods extends Goods {
    public function __construct() {}
    public function getPrice() {}
}

//代理类
class GoodsProxy extends Goods {
    private $_real_goods;

    public function getPrice()
    {
        //获取价格前处理...
        $this->_before();

        if ($this->_real_goods == null) {
            $this->_real_goods = new RealGoods();
        }

        $this->_real_goods->getPrice();

        //获取价格后处理..
        $this->_after();
    }

    private function _before()
    {
        echo "获取价格前处理...\n";
    }

    private function _after()
    {
        echo "获取价格后处理...\n";
    }
}

//访问代理类
$goodsProxy = new GoodsProxy();
$goodsProxy->getPrice();

/*
结果：
获取价格前处理...
获取价格后处理...
*/
