<?php


namespace Taoran\DesignPatterns\Adapter;

/**
 * mysqli适配
 *
 * Class Mysqli
 * @package Taoran\DesignPatterns\Adapter
 */
class Mysqli implements DatabaseAdapter
{
    protected $conn;

    public function connect($host, $port, $username, $password, $dbname)
    {
        $this->conn = mysqli_connect($host, $username, $password, $dbname, $port);
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
        $this->conn->close();
    }
}