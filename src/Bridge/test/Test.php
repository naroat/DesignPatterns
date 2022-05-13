<?php

namespace Taoran\DesignPatterns\Bridge;

ini_set('display_errors', 'on');

require '../../../vendor/autoload.php';

$square = new Square(new Red());
$fillSquare = $square->fill();

$circle = new Circle(new Blue());
$fillCircle = $circle->fill();

var_dump($fillSquare);
var_dump($fillCircle);

/*
    结果：
    string(15) "红色正方形"
    string(12) "蓝色原型"
 */