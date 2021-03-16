<?php 
/*
class Human {
    function __construct() {
        $this->name = null;
        $this->address = null;
    }
    function show() {
        print ($this->name."\n");
        print($this->address."\n");
    }
}
class Actor extends Human{}

$actor = new Actor;
$actor->name="Ken";
$actor->address="Hokkaido";

$actor->show();
*/


class Hoge {
    function hello(){
        print("Hello Php"."\n");
    }
}

$hoge = new Hoge();
$hoge->hello();


?>