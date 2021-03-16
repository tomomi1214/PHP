<?php
$data = [
    "name" => "大泉",
    "gender" => "male",
    "age" => 46
    ];

$data['children'] = ["Taro", "Jiro", "Sabuto"];

var_dump($data);

var_dump($data['children']);

$dic = [
    "x" => 10,
    "y" => 20
    ];
$dic['y'] = 40;

var_dump($dic);


?>