<?php


namespace Taoran\DesignPatterns\Bridge;

/**
 * 扩充抽象类 - red
 */
class Red extends ColorAbstraction
{
    public function color()
    {
        return '红色';
    }
}