<?php

/**
 * 工厂方法抽象类
 * Class FactoryMethod
 */
interface ToyFactory
{
    //获取工厂实例
    public static function getInstance(): ToyInterface;
}

/**
 * 具体的工厂接口
 * Interface ToyFactory
 */
interface ToyInterface
{
    //生产玩具
    public function createToy();
}

/**
 * 玩具车工厂
 * Class CarToy
 */
class CarToy implements ToyInterface
{
    public function createToy()
    {
        echo "玩具车生产" . PHP_EOL;
    }
}

/**
 * 布偶玩具工厂
 * Class PuppetToy
 */
class PuppetToy implements ToyInterface
{
    public function createToy()
    {
        echo "布偶玩具生产" . PHP_EOL;
    }
}


/**
 * 玩具车工厂实例化接口
 *
 * Class CarToyFactory
 */
class CarToyFactory implements ToyFactory
{
    public static function getInstance(): ToyInterface
    {
        return new CarToy();
    }
}

/**
 * 布偶玩具工厂实例化接口
 *
 * Class PuppetToyFactory
 */
class PuppetToyFactory implements ToyFactory
{
    public static function getInstance(): ToyInterface
    {
        return new PuppetToy();
    }
}

//客户端
CarToyFactory::getInstance()->createToy();
PuppetToyFactory::getInstance()->createToy();