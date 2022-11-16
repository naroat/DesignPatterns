<?php

interface Goods {
    public function getInfo();
    public function calcPrice();
}

//装饰角色
abstract class GoodsDecorator implements Goods{
    public function __construct(Goods $goods)
    {
    }
}

//具体类
class TV implements Goods{
    public function getInfo()
    {
        return "tv";
    }

    public function calcPrice()
    {
        return 1000;
    }
}

//具体装饰类
class Express extends GoodsDecorator{

    private $price = 50;

    public function getInfo()
    {
        return $this->getInfo() . " express desc";
    }

    public function calcPrice()
    {
        return $this->calcPrice() + $this->price;
    }
}

$tv = new TV();
$tv = new Express($tv);
$tv->getInfo();