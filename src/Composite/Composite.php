<?php


namespace Taoran\DesignPatterns\Composite;

/**
 * 合成部件：定义有枝节点的行为，用来存储部件，实现在Component接口中的有关操作，如增加（Add）和删除（Remove）
 *
 * Class Composite
 * @package Taoran\DesignPatterns\Composite
 */
class Composite extends Component
{
    /** @var array 存储枝节点和叶节点 */
    private $children = [];

    public function add(Component $component)
    {
        $this->children[] = $component;
    }

    public function show($depth)
    {

    }
}