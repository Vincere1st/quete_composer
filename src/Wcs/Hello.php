<?php
namespace App\Wcs;

class Hello{

    public $hello;

    public function talk() : string{
        $hello = 'Hello World!';
        return $hello;
    }
}