<?php


namespace Taoran\DesignPatterns\Builder;

/**
 * 具体抵扣券的生成器(建造者)
 *
 * Class DeductionCoupon
 * @package Taoran\DesignPatterns\Builder
 */
class DeductionCoupon extends Builder
{
    public function buildType()
    {
        $this->coupon->type = '抵扣券;';
    }

    public function buildScope()
    {
        $this->coupon->scope = '仅大于10元的实体产品可用;';
    }

    public function buildCost()
    {
        $this->coupon->cost = '10元;';
    }

    public function getCoupon()
    {
        $this->coupon->show();
    }
}