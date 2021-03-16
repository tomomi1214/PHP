<?php

function check ($num){
    if($num == 42) {
        print("Answer to the Ultimate Question of Life, the Universe, and Enerything"."\n");
    }
}
check(32);

$even_num = [];
$odd_num = [];

function sort_number ($number){
    global $even_num;
    global $odd_num;
    
    if($number % 2 == 0){
        array_push($even_num, $number);
    }else{
        array_push($odd_num, $number);
    }
    
}

sort_number(5);
var_dump($even_num);
var_dump($odd_num);

?>