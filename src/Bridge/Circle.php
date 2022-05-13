<?php


namespace Taoran\DesignPatterns\Bridge;

/**
 * 具体实现类 - Circle
 *
 * Class Circle
 * @package Taoran\DesignPatterns\Bridge
 */
class Circle extends GraphInterface
{
    public function fill()
    {
        return $this->color->color() . '圆形';
    }
}