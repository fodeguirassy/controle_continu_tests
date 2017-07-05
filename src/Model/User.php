<?php
/**
 * Created by PhpStorm.
 * User: fofofofodev
 * Date: 16/06/2017
 * Time: 18:56
 */

namespace Model;

class User
{
    public function __construct($firstname, $lastname, $email)
    {
        $this->firstname = $firstname;
        $this->lastname = $lastname;
        $this->email = $email;
    }
    /**
     * @return string
     */
    public function getFirstname()
    {
        return $this->firstname;
    }
    /**
     * @return string
     */
    public function getLastname()
    {
        return $this->lastname;
    }

    /**
     * @return string
     */
    public function getEmail()
    {
        return $this->email;
    }
}
