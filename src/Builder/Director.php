<?php


namespace Taoran\DesignPatterns\Builder;

/**
 * 指挥官
 *
 * Class Director
 * @package Taoran\DesignPatterns\Builder
 */
class Director
{
    public function build(Builder $builder)
    {
        $builder->buildType();
        $builder->buildScope();
        $builder->buildCost();
        return $builder->getCoupon();
    }
}