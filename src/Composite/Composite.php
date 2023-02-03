<?php

// component为组合中的对象接口，在适当的情况下，实现所有类共有接口的默认行为。声明一个接口用于访问和管理Component的字部件。
abstract class Component
{
    protected $name;

    function __construct($name)
    {
        $this->name = $name;
    }

    //通常用add和remove方法来提供增加或移除树枝或树叶的功能
    abstract public function add(Component $c);

    abstract public function remove(Component $c);

    abstract public function display($depth);
}


//透明方式和安全方式的区别就在叶子节点上，透明方式的叶子结点可以无限扩充，然而安全方式就是对其做了绝育限制。
class Leaf extends Component
{
    public function add(Component $c)
    {
        echo "不能在添加叶子节点了\n";
    }

    public function remove(Component $c)
    {
        echo "不能移除叶子节点了\n";
    }

    // 叶节点的具体方法，此处是显示其名称和级别
    public function display($depth)
    {
        echo '|' . str_repeat('-', $depth) . $this->name . "\n";
    }
}

//composite用来处理子节点，控制添加，删除和展示（这里的展示可以是任意功能）
class Composite extends Component
{
    //一个子对象集合用来存储其下属的枝节点和叶节点。
    private $children = [];

    public function add(Component $c)
    {
        array_push($this->children, $c);
    }

    public function remove(Component $c)
    {
        foreach ($this->children as $key => $value) {
            if ($c === $value) {
                unset($this->children[$key]);
            }
        }
    }

    public function display($depth)
    {
        echo str_repeat('-', $depth) . $this->name . "\n";
        foreach ($this->children as $component) {
            $component->display($depth);
        }
    }
}

//客户端代码
//声明根节点
$root = new Composite('根');

//在根节点下，添加叶子节点
$root->add(new Leaf("叶子节点1"));
$root->add(new Leaf("叶子节点2"));

//声明树枝
$comp = new Composite("树枝");
$comp->add(new Leaf("树枝A"));
$comp->add(new Leaf("树枝B"));
$root->add($comp);


$root->add(new Leaf("叶子节点3"));

//添加并删除叶子节点4
$leaf = new Leaf("叶子节点4");
$root->add($leaf);
$root->remove($leaf);

//展示
$root->display(1);
