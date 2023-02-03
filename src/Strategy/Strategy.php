<?php

/**
 * 抽象策略角色
 * Interface Strategy
 */
interface Strategy {
    public function exec();
}

/**
 * 具体策略A
 *
 * Class StrategyA
 */
class StrategyA implements Strategy
{
    public function exec()
    {
        echo "EXEC A" . PHP_EOL;
    }
}


/**
 * 具体策略B
 *
 * Class StrategyA
 */
class StrategyB implements Strategy
{
    public function exec()
    {
        echo "EXEC B" . PHP_EOL;
    }
}

/**
 * 上下文
 * Class Context
 */
class Context
{
    private $strategy;

    public function __construct(Strategy $strategy)
    {
        $this->strategy = $strategy;
    }

    /**
     * 执行策略
     */
    public function execStrategy()
    {
        $this->strategy->exec();
    }
}

//客户端
$strategyA = new StrategyA();
$context = new Context($strategyA);
$context->execStrategy();   //EXEC A

$strategyB = new StrategyB();
$context = new Context($strategyB);
$context->execStrategy();   //EXEC B