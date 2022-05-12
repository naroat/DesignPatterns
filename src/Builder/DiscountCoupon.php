<?php


namespace Taoran\DesignPatterns\Builder;

/**
 * 具体抵扣券的生成器(建造者)
 *
 * Class DeductionCoupon
 * @package Taoran\DesignPatterns\Builder
 */
class DiscountCoupon extends Builder
{
    public function buildType()
    {
        $this->coupon->type = '折扣券;';
    }

    public function buildScope()
    {
        $this->coupon->scope = '全产品可用;';
    }

    public function buildCost()
    {
        $this->coupon->cost = '8折;';
    }

    public function getCoupon()
    {
        $this->coupon->show();
    }
}