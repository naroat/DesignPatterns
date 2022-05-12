<?php


namespace Taoran\DesignPatterns\Builder;

/**
 * 抽象优惠券的生成器(建造者)
 *
 * Class Builder
 * @package Taoran\DesignPatterns\Builder
 */
abstract class Builder
{
    protected $coupon;

    public function __construct()
    {
        $this->coupon = new Coupon();
    }

    abstract public function buildType();
    abstract public function buildScope();
    abstract public function buildCost();
    abstract public function getCoupon();
}