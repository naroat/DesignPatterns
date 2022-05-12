<?php
namespace Taoran\DesignPatterns\Adapter;

ini_set('display_errors', 'on');

require '../../../vendor/autoload.php';

//$dbconn = new Mysqli();
$dbconn = new Pdo();

// 适配后，以下代码不用动，只需要切换上面db连接
$dbconn->connect('127.0.0.1','3306', 'root', 'root', 'test');

$result = $dbconn->query('select * from `test`');

foreach ($result as $val) {
    var_dump($val);
}

$dbconn->close();

