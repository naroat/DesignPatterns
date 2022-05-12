<?php
namespace Taoran\DesignPatterns\Adapter;

/**
 * 数据库适配器
 *
 * Interface DatabaseAdapter
 * @package Taoran\DesignPatterns\Adapter
 */
interface DatabaseAdapter
{
    public function connect($host, $port, $username, $password, $dbname);
    public function query($sql);
    public function close();
}