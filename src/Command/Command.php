<?php
/**
命令模式的四种角色：

1. 接收者（Receiver）负责执行与请求相关的操作

2. 命令接口（Command）封装execute()、undo()等方法

3. 具体命令（ConcreteCommand）实现命令接口中的方法

4. 请求者（Invoker）包含Command接口变量
 */

/**
 * 命令接口
 * Interface CommandInterface
 */
interface CommandInterface
{
    public function exec();
}

/**
 * 具体命令
 * Class ConcreteCommand
 */
class ConcreteCommand implements CommandInterface
{
    private $receiver;

    public function __construct(Receiver $receiver)
    {
        $this->receiver = $receiver;
    }

    public function exec()
    {
        $this->receiver->exec("exec command");
    }
}

/**
 * 接收者(执行者)
 * Class Receiver
 */
class Receiver
{
    public function exec($str)
    {
        echo $str . PHP_EOL;
    }
}

/**
 * 请求者
 * Class Invoker
 */
class Invoker
{
    private $command;

    public function setCommand(CommandInterface $command)
    {
        $this->command = $command;
    }

    public function run()
    {
        $this->command->exec();
    }
}

//客户端
$receiver = new Receiver();
$invoker = new Invoker();
$invoker->setCommand(new ConcreteCommand($receiver));
$invoker->run();