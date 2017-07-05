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
        $this->stringFormatter = new StringFormatter("Hello ","world");
    }

    public function testConcat(){
        $this->setUp();
        $concataned = $this->stringFormatter->concat();
        $this->assertSame("Hello world", $concataned);
    }

    public function testToCamelCase(){
        $camelString = $this->stringFormatter->toCamelCase();
        $this->assertSame("hello World", $camelString);
    }

    

}
