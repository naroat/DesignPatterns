<?php
ini_set("display_errors", "On");
error_reporting(E_ALL | E_STRICT);

/**
 * 备忘录： 设置和获取备忘录中记录的状态
 * Class Memento
 */
class Memento
{
    private $state;

    //设置状态
    public function __construct($state)
    {
        $this->state = $state;
    }

    //获取状态
    public function getState()
    {
        return $this->state;
    }
}

/**
 * 发起人: 这里面有个内部状态，在不同情况下进行修改；可以创建备忘录和从备忘录中还原状态
 * Class State
 */
class Originator
{
    private $state;

    //查看状态
    public function showState()
    {
        echo $this->state . PHP_EOL;
    }

    //设置状态
    public function setState($state)
    {
        $this->state = $state;
    }

    //创建备忘录
    public function createMemento(): Memento
    {
        return new Memento($this->state);
    }

    //备忘录恢复状态
    public function restoreMemento(Memento $memento)
    {
        $this->state = $memento->getState();
    }
}

/**
 * 负责人(管理者类)：这个只用于获取和保存备忘录；
 * Class Event
 */
class Caretaker
{
    private $memento;

    //保存备忘录
    public function setMemento(Memento $memento): void
    {
        $this->memento = $memento;
    }

    //获取快早
    public function getMemento(): Memento
    {
        return $this->memento;
    }
}

//客户端

//设置初始状态
$originator = new Originator();
$originator->setState("start");
$originator->showState();

//创建备忘录
$memento = $originator->createMemento();
//保存备忘录
$caretaker = new Caretaker();
$caretaker->setMemento($memento);

//设置新状态
$originator->setState("running");
$originator->showState();

//恢复到上一个状态
$originator->restoreMemento($memento);
$originator->showState();


/*
    状态变化：
    start
    running
    start
 */
