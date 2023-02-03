<?php

ini_set("display_errors", "On");
error_reporting(E_ALL | E_STRICT);

/**
 * 中介接口
 * Class Mediator
 */
interface Mediator
{
    public function run($handle, Component $component);
}

/**
 * 具体的中介者
 * Class ConcreteMediator
 */
class ConcreteMediator implements Mediator
{
    //组件A
    public $componentA;

    //组件B
    public $componentB;

    public function run($handle, Component $component)
    {

        if ($component == $this->componentA) {
            //调用组件A,触发组件B
            $this->componentB->trigger($handle);
        } elseif ($component == $this->componentB) {
            //调用组件B,触发组件A
            $this->componentA->trigger($handle);
        }
    }
}

/**
 * 抽象组件类
 * Class Component
 */
abstract class Component
{
    //中介
    protected $mediator;

    public function __construct(Mediator $mediator)
    {
        $this->mediator = $mediator;
    }
}

/**
 * 具体的组件A
 * Class ComponentA
 */
class ComponentA extends Component
{
    //组件A执行程序
    public function run(string $message)
    {
        $this->mediator->run($message, $this);
    }

    public function trigger($handle)
    {
        echo "组件A触发操作:" . $handle . PHP_EOL;
    }
}

/**
 * 具体的组件B
 * Class ComponentB
 */
class ComponentB extends Component
{
    //组件B执行程序
    public function run(string $message)
    {
        $this->mediator->run($message, $this);
    }

    public function trigger($handle)
    {
        echo "组件B触发操作:" . $handle . PHP_EOL;
    }
}


//客户端
$m = new ConcreteMediator();
$c1 = new ComponentA($m);
$c2 = new ComponentB($m);
$m->componentA = $c1;
$m->componentB = $c2;

echo "调用组件A" . PHP_EOL;
$c1->run("执行操作");
echo "调用组件B" . PHP_EOL;
$c2->run("执行操作");

/*
    结果：
    调用组件A
    组件B触发操作:执行操作
    调用组件B
    组件A触发操作:执行操作
 */