<?php

/**
 * 观察者： sms
 */
class Sms implements Observer
{
    public function update(Observable $observable)
    {
        if ($observable->getStatus() == 1) {
            echo '短信：下单成功' . '<br/>';
        } else {
            echo '短信：下单失败' . '<br/>';
        }
    }
}