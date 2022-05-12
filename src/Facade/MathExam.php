<?php
namespace Taoran\DesignPatterns\Facade;

/**
 * 数学考试
 *
 * Class MathExam
 * @package Taoran\DesignPatterns\Facade
 */
class MathExam
{
    /**
     * 考试
     */
    public function exam()
    {
        echo "Math Exam!" . PHP_EOL;
    }

    /**
     * 补考
     */
    public function makeUpExam()
    {
        echo "Math make up Exam!" . PHP_EOL;
    }
}