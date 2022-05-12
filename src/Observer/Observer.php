<?php
namespace Taoran\DesignPatterns\Observer;
/**
 * 观察者接口
 *
 * Interface Observer
 */
interface Observer
{
    /**
     * 接收到通知的处理方法
     *
     * @param Observable $observable
     * @return mixed
     */
    public function update(Observable $observable);
}