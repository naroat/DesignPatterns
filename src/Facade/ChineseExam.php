<?php

namespace Taoran\DesignPatterns\Facade;

/**
 * 中文考试
 *
 * Class EnglishExam
 * @package Taoran\DesignPatterns\Facade
 */
class ChineseExam
{
    /**
     * 考试
     */
    public function exam()
    {
        echo "Chinese Exam!" . PHP_EOL;
    }

    /**
     * 补考
     */
    public function makeUpExam()
    {
        echo "Chinese make up Exam!" . PHP_EOL;
    }
}