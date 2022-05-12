<?php
namespace Taoran\DesignPatterns\Facade;

/**
 * 英语考试
 *
 * Class EnglishExam
 * @package Taoran\DesignPatterns\Facade
 */
class EnglishExam
{
    /**
     * 考试
     */
    public function exam()
    {
        echo "English Exam!" . PHP_EOL;
    }

    /**
     * 补考
     */
    public function makeUpExam()
    {
        echo "English make up Exam!" . PHP_EOL;
    }
}