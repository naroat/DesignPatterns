<?php
namespace Taoran\DesignPatterns\Facade;

/**
 * 门面
 *
 * Class Facade
 * @package Taoran\DesignPatterns\Facade
 */
class Facade
{
    private $chineseExam;

    private $englishExam;

    private $mathExam;

    public function __construct()
    {
        $this->chineseExam = new ChineseExam();
        $this->englishExam = new EnglishExam();
        $this->mathExam = new MathExam();
    }

    public function exam()
    {
        //中文考试
        $this->chineseExam->exam();
        //数学考试
        $this->mathExam->exam();
        //英语补考
        $this->englishExam->makeUpExam();
    }
}