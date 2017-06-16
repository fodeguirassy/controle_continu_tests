<?php
/**
 * Created by PhpStorm.
 * User: fofofofodev
 * Date: 16/06/2017
 * Time: 18:57
 */
namespace tests\Model;
use PHPUnit\Framework\TestCase;
use Model\User;


class UserTest extends TestCase{
    private $user;
    public function setUp(){
        $this->user = new  User("sambarou","Mballo",
            "samb@mballo.fr");

    }

    public function testGetFirstName(){
        $this->setUp();
        $this->assertSame("sambarou", $this->user->getFirstname());
    }

}
