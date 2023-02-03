<?php


class WorkerPool implements Countable
{
    /**
     * 工作池子
     * @var StringReverseWorker[]
     */
    private array $occupiedWorkers = [];

    /**
     * 空闲池子
     * @var StringReverseWorker[]
     */
    private array $freeWorkers = [];

    /**
     * 获取对象
     */
    public function get(): StringReverseWorker
    {
        if (count($this->freeWorkers) === 0) {
            //空闲池为空的时候创建对象
            $worker = new StringReverseWorker();
        } else {
            //取出对象
            $worker = array_pop($this->freeWorkers);
        }

        //取出或创建的对象加入工作池子
        $this->occupiedWorkers[spl_object_hash($worker)] = $worker;

        return $worker;
    }

    //加入到空闲池子
    public function dispose(StringReverseWorker $worker): void
    {
        $key = spl_object_hash($worker);
        if (isset($this->occupiedWorkers[$key])) {
            unset($this->occupiedWorkers[$key]);
            $this->freeWorkers[$key] = $worker;
        }
    }

    public function count(): int
    {
        return count($this->occupiedWorkers) + count($this->freeWorkers);
    }
}

class StringReverseWorker
{
    public function run(string $text): string
    {
        return strrev($text);
    }
}

//客户端
$pool = new WorkerPool();
$w1 = $pool->get();
//$pool->dispose($w1);
$w2 = $pool->get();
var_dump($pool);
var_dump(spl_object_hash($w1));