<?php

$customer1 = "Taro";
$customer2 = "Jiro";
$customer3 = "Saburo";

print($customer1."\n");
print($customer2."\n");
print($customer3."\n");

$customers = [ "Taro", "Jiro", "Saburo"];

foreach ($customers as $customer){
    print($customer."\n");
}

$data = [1, 2, "A"];
foreach ($data as &$d){
    print(($d + 1)."\n");
}

$data1 = [1,2,3];
array_push($data, 4);

var_dump($data1);

var_dump(count($data1));


$numlist = ["one", "two", "three"];
print($numlist[1]."\n");

$stringlist = [];
array_push($stringlist, "samurai");

var_dump($stringlist);
?>