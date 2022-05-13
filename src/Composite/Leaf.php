<?php


namespace Taoran\DesignPatterns\Composite;


class Leaf extends Component
{
    public function add()
    {
        //叶子节点不能再有子节点
        return 'false';
    }

    public function show($depth)
    {

    }
}