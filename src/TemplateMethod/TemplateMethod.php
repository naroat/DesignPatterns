<?php

//抽象模板类
abstract class Template
{
    public function templateMethod()
    {
        $this->methodA();
        $this->methodB();
    }

    abstract protected function methodA();
    abstract protected function methodB();
}

//具体类
class Concrete extends Template
{
    public function methodA()
    {
        echo "方法A" . PHP_EOL;
    }

    public function methodB()
    {
        echo "方法B" . PHP_EOL;
    }
}

//客户端
$concrete = new Concrete();
$concrete->templateMethod();