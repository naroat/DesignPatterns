<?php

namespace Taoran\DesignPatterns\Builder;

ini_set('display_errors', 'on');

require '../../../vendor/autoload.php';

// 生成 抵扣券
$director = new Director();
$director->build(new DeductionCoupon());

echo '---------- 分割线 ----------' . PHP_EOL;
// 生成 折扣券
$director->build(new DiscountCoupon());