<?php


namespace Taoran\DesignPatterns\Bridge;

/**
 * 具体实现类 - Square
 *
 * Class Square
 * @package Taoran\DesignPatterns\Bridge
 */
class Square extends GraphInterface
{
    public function fill()
    {
        return $this->color->color() . '正方形';
    }
}