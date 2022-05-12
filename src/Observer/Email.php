<?php
namespace Taoran\DesignPatterns\Observer;

/**
 * 观察者： 邮件
 */
class Email implements Observer
{
    public function update(Observable $observable)
    {
        if ($observable->getStatus() == 1) {
            echo '邮件：下单成功' . '<br/>';
        } else {
            echo '邮件：下单失败' . '<br/>';
        }
    }
}