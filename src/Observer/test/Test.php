<?php

namespace Taoran\DesignPatterns\Observer;
ini_set('display_errors', 'on');
require '../../../vendor/autoload.php';

$order = new Order();
$email = new Email();
$sms = new Sms();

//添加到观察者
$order->attach($email);
$order->attach($sms);

//删除观察者
//$order->detach($email);


//下单
$order->addOrder();

/*
    结果：
    邮件：下单成功
    短信：下单成功
*/

