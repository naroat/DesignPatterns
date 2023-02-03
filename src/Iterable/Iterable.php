<?php
interface Iterator extends Traversable {

    public function current();

    public function next();

    public function key();

    public function valid();

    public function rewind();
}

class MyIterator implements Iterator
{
    private $position = 0;

    private $array = array(
        "firstelement",
        "secondelement",
        "lastelement",
    );

    public function __construct() {
        $this->position = 0;
    }

    public function rewind() {
        var_dump(__METHOD__);
        $this->position = 0;
    }

    public function current() {
        var_dump(__METHOD__);
        return $this->array[$this->position];
    }

    public function key() {
        var_dump(__METHOD__);
        return $this->position;
    }

    public function next() {
        var_dump(__METHOD__);
        ++$this->position;
    }

    public function valid() {
        var_dump(__METHOD__);
        return isset($this->array[$this->position]);
    }
}

$myIterator = new MyIterator();
foreach ($myIterator as $key => $value) {
    var_dump($key, $value);
}

//结果
/*
    string(18) "MyIterator::rewind"
    string(17) "MyIterator::valid"
    string(19) "MyIterator::current"
    string(15) "MyIterator::key"
    int(0)
    string(12) "firstelement"
    string(16) "MyIterator::next"
    string(17) "MyIterator::valid"
    string(19) "MyIterator::current"
    string(15) "MyIterator::key"
    int(1)
    string(13) "secondelement"
    string(16) "MyIterator::next"
    string(17) "MyIterator::valid"
    string(19) "MyIterator::current"
    string(15) "MyIterator::key"
    int(2)
    string(11) "lastelement"
    string(16) "MyIterator::next"
    string(17) "MyIterator::valid"
 */