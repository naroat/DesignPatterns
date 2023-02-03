<?php
ini_set("display_errors", "On");
error_reporting(E_ALL | E_STRICT);
/**
    Flyweight：享元抽象类，所有具体享元类的接口，通过这个接口，Flyweight 可以接受并作用于外部状态。
    ConcreteFlyweight：实现 Flyweight 接口的可以共享的具体享元类。
    UnsharedConcreteFlyweight：非共享的具体享元类。
    FlyweightFactory：享元工厂，用来创建并管理 Flyweight 对象，它主要是用来确保合理地共享 Flyweight，当用户请求一个 Flyweight 时，FlyweightFactory 对象提供一个已创建的实例或者创建一个（如果不存在的话）。
 */

/**
 * 享元抽象类
 * Class Flyweight
 */
abstract class Flyweight
{
    protected $name;

    public function __construct($name)
    {
        $this->name = $name;
    }

    abstract public function operate();
}

/**
 * 共享的具体享元类
 * Class ConcreteFlyweight
 */
class ConcreteFlyweight extends Flyweight
{
    public function operate()
    {
        return "共享的享元：{$this->name}" . PHP_EOL;
    }
}

/**
 * 非共享的具体享元类
 * Class UnsharedConcreteFlyweight
 */
class UnsharedConcreteFlyweight extends Flyweight
{
    public function operate()
    {
        return "不共享的享元：{$this->name}" . PHP_EOL;
    }
}

/**
 * 享元工厂，用来创建并管理 Flyweight 对象
 * Class FlyweightFactory
 */
class FlyweightFactory
{
    private $flyweights = [];

    /**
     * 获取对象
     * @param $name
     * @return ConcreteFlyweight|mixed
     */
    public function getFlyweight($name)
    {
        if (!isset($this->flyweights[$name])) {
            return $this->flyweights[$name] = new ConcreteFlyweight($name);
        }
        return $this->flyweights[$name];
    }
}

//客户端
$flyweightFactory = new FlyweightFactory();

//共享的享元
$flyweight = $flyweightFactory->getFlyweight("a");
echo $flyweight->operate();
$flyweight = $flyweightFactory->getFlyweight("b");
echo $flyweight->operate();

$uflyweight = new UnsharedConcreteFlyweight("c");
echo $uflyweight->operate();

//var_dump($flyweightFactory);exit;