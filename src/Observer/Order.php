<?php
namespace Taoran\DesignPatterns\Observer;
/**
 * 被观察者： 订单
 */
class Order implements Observable
{
    /** @var array 保存观察者 */
    private $observers = [];

    /** @var int 订单状态 */
    private $status = 0;

    /**
     * 添加观察者
     *
     * @param Observer $observer
     */
    public function attach(Observer $observer)
    {
        $key = array_search($observer, $this->observers);
        if ($key === false) {
            $this->observers[] = $observer;
        }
    }

    /**
     * 删除观察者
     *
     * @param Observer $observer
     */
    public function detach(Observer $observer)
    {
        $key = array_search($observer, $this->observers);
        if ($key !== false) {
            unset($this->observers[$key]);
        }
    }

    /**
     * 通知观察者
     */
    public function notify()
    {
        foreach ($this->observers as $observer) {
            $observer->update($this);
        }
    }

    /**
     * 下单
     */
    public function addOrder()
    {
        //订单状态改变
        $this->status = 1;

        //通知观察者
        $this->notify();
    }

    /**
     * 提供一个获取订单状态的方法
     *
     * @return int
     */
    public function getStatus()
    {
        return $this->status;
    }

}