<?php


namespace Taoran\DesignPatterns\Composite;

/**
 * 组合部件 - 为要组合的对象提供统一的接口
 *
 * Class Component
 * @package Taoran\DesignPatterns\Composite
 */
abstract class Component
{
    /** @var 节点名称 */
    protected $name;

    public function __construct($name)
    {
        $this->name = $name;
    }

    /**
     * 添加节点
     *
     * @return mixed
     */
    abstract public function add(Component $component);

    /**
     * 显示节点
     *
     * @return mixed
     */
    abstract public function show($depth);
}