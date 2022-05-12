<?php


namespace Taoran\DesignPatterns\Adapter;

/**
 * pdo适配
 *
 * Class Pdo
 * @package Taoran\DesignPatterns\Adapter
 */
class Pdo implements DatabaseAdapter
{
    protected $conn;

    public function connect($host, $port, $username, $password, $dbname)
    {
        $dsn = "mysql:host={$host}:{$port};dbname={$dbname}";
        $this->conn = new \PDO($dsn, $username, $password);
        if (!$this->conn) {
            echo '数据库连接失败！';
            exit;
        }
    }

    public function query($sql)
    {
        return $this->conn->query($sql);
    }

    public function close()
    {
        $this->conn = null;
    }
}