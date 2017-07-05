<?php
/**
 * Created by PhpStorm.
 * User: fofofofodev
 * Date: 16/06/2017
 * Time: 18:57
 */
namespace tests\Model;
use PHPUnit\Framework\TestCase;
use Model\StringFormatter;


class StringFormatterTest extends TestCase {
    private $stringFormatter;

    public function setUp(){
        $this->stringFormatter = new StringFormatter();
    }

    public function testConcat(){
        $this->setUp();
        $concataned = $this->stringFormatter->concat("Hello ","world");
        $this->assertSame("Hello world", $concataned);
    }



}
