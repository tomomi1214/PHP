<?php
function hello ($a, $b){
    print(($a + $b)."\n");
}
hello (21,29);

function hello2 ($a = 20) {
    print($a."\n");
}
hello2();
hello2("Hello");

function add ($a, $b) {
    return $a+$b;
}
$num = add (2,3);
print($num."\n");


function calc($a, $b){
    return $a*$b;
}
$total = calc(30,40);
print($total."\n");


function triangle_area ($a, $h) {
    return ($a * $h)* 1/2;
}
$area = triangle_area(2,3);
print($area."\n");


/*
function add_list ($file_name) {
    return $file_name.".php";
}
$file_list = add_list('hello');
print($file_list."\n");
*/

$file_list = [];
function add_list ($name) {
    global $file_list;
    $file_name = $name.".php";
    array_push($file_list, $file_name);
}

add_list("function");
var_dump($file_list);

add_list("hello");
var_dump($file_list);




?>