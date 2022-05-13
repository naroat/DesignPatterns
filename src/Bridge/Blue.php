<?php


namespace Taoran\DesignPatterns\Bridge;

/**
 * 扩充抽象类 - blue
 */
class Blue extends ColorAbstraction
{
    public function color()
    {
        return '蓝色';
    }
}