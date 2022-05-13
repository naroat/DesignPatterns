<?php


namespace Taoran\DesignPatterns\Bridge;

/**
 * 实现类接口
 *
 * Class GraphInterface
 * @package Taoran\DesignPatterns\Bridge
 */
abstract class GraphInterface
{
    protected $color;

    public function __construct(ColorAbstraction $colorAbstraction)
    {
        $this->color = $colorAbstraction;
    }

    abstract function fill();
}