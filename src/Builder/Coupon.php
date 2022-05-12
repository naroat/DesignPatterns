<?php


namespace Taoran\DesignPatterns\Builder;

/**
 * 具体的产品角色 - 优惠券
 *
 * Class Coupon
 * @package Taoran\DesignPatterns\Builder
 */
class Coupon
{
    /** @var 类型 */
    public $type;

    /** @var 使用范围 */
    public $scope;

    /** @var 面额或折扣 */
    public $cost;

    public function show()
    {
        echo '类型：' . $this->type . PHP_EOL;
        echo '使用范围：' . $this->scope . PHP_EOL;
        echo '面额或折扣：' . $this->cost . PHP_EOL;
    }
}