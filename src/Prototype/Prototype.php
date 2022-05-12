<?php

namespace Taoran\DesignPatterns\Prototype;

class Prototype
{
    public function init()
    {
        //一些很占用系统资源的操作
    }

    public function run()
    {

    }
}

//原型模式
$prototype = new Prototype();
$prototype->init();

$obj1 = clone $prototype;
$obj1->run();

$obj2 = clone $prototype;
$obj2->run();