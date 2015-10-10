<?php
/**
 * Created by PhpStorm.
 * User: ihsan
 * Date: 10.10.2015
 * Time: 14:48
 */
namespace HelloWorld;

class SayHello {
    public function world($a) {
        return 'Hello ' . $a * $a;
    }
}