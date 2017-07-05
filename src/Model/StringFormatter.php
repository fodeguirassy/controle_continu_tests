<?php
/**
 * Created by PhpStorm.
 * User: fofofofodev
 * Date: 05/07/2017
 * Time: 10:58
 */

namespace Model;

class StringFormatter
{
    private $firstString;
    private $secondString;

    public function __construct($string1, $string2)
    {
        $this->firstString = $string1;
        $this->secondString = $string2;
    }

    public function concat()
    {
        return $this->firstString.$this->secondString;
    }

    public function toCamelCase()
    {
        return ucfirst($this->firstString).ucfirst($this->secondString);
    }

    public function prefix($toCamelCase)
    {
        if ($toCamelCase == true) {
            return $this->toCamelCase();
        } else {
            return $this->concat();
        }
    }

    public function suffix($toCamelCase)
    {
        if ($toCamelCase == true) {
            return $this->firstString.ucfirst($this->secondString);
        } else {
            return $this->concat();
        }
    }
}
