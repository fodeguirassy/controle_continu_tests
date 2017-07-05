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
        $this->assertSame("hello world", $concataned);
    }

    public function testToCamelCase(){
        $camelString = $this->stringFormatter->toCamelCase();
        $this->assertSame("Hello World", $camelString);
    }


    public function testPrefix(){
        $toCamelCase = false;
        $concataned = $this->stringFormatter->prefix($toCamelCase);
        $this->assertSame("hello world", $concataned);

        $toCamelCase = true;
        $camelString = $this->stringFormatter->prefix($toCamelCase);
        $this->assertSame("Hello World", $camelString);

    }

    public function testSuffix(){
        $toCamelCase = false;
        $concataned = $this->stringFormatter->suffix($toCamelCase);
        $this->assertSame("hello world", $concataned);

        $toCamelCase = true;
        $camelString = $this->stringFormatter->suffix($toCamelCase);
        $this->assertSame("Hello World", $camelString);

    }
}
