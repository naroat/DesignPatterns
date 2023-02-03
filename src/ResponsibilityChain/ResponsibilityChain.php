<?php
ini_set("display_errors", "On");
error_reporting(E_ALL | E_STRICT);
/**
 * 示例： 检查违规词汇，隐藏身份证号码
 */

/**
 * 链条
 * Class Handle
 */
abstract class Filler
{
    /*
     * 存放下一个链式对象容器
     */
    protected $next;

    /*
     * 设置下一个链式对象容器
     */
    public function handle($next)
    {
        $this->next = $next;
    }

    //定义一个抽象方法
    abstract function processing($message);
}

/**
 * 过滤违规词汇
 * Class filler
 */
class WordsFiller extends Filler
{
    /*
     * 违规词汇
     */
    protected $fillerWords = ["毒品", "政治"];

    public function processing($message)
    {
        //检查违规词汇
        foreach ($this->fillerWords as $word) {
            if (strpos($message, $word) !== false) {
                return "该信息包含敏感词汇" . PHP_EOL;
            }
        }

        if ($this->next) {
            return $this->next->processing($message);
        } else {
            return $message;
        }
    }
}

/**
 * 隐藏手机号码
 * Class Hide
 */
class PhoneHide extends Filler
{
    public function processing($message)
    {
        $message = preg_replace("/(1[3|5|7|8]\d)\d{4}(\d{4})/i", "$1****$2", $message);
        if ($this->next) {
            return $this->next->processing($message);
        } else {
            return $message;
        }
    }
}

/**
 * 隐藏邮箱
 * Class Hide
 */
class EmailHide extends Filler
{
    public function processing($message)
    {
        $message = preg_replace("/[a-zA-Z0-9_-]+@[a-zA-Z0-9_-]+(\.[a-zA-Z0-9_-]+)+/i", "$1****$2", $message);
        if ($this->next) {
            return $this->next->processing($message);
        } else {
            return $message;
        }
    }
}

//实例需要用到的类
$wordFiller = new WordsFiller();
$phoneHide = new PhoneHide();
$emailHide = new EmailHide();

//设置链式走向
$wordFiller->handle($phoneHide);
$phoneHide->handle($emailHide);

//调用
$message = "这是一个句子，不能包含毒x和政x，违规联系13000000000或者emial123@193.com删除";
echo $wordFiller->processing($message);