<?php
/*
for ($i = 0; $i <= 10; $i++){
    print("Hello World"."\n");
}


$animals = ["dog", "cat", "bird"];
foreach($animals as $animal) {
    print($animal."\n");
}

for($i=1; $i<31; $i++){
    if($i%3 === 0){
        print("3の倍数です"."\n");
    }else{
        print($i."\n");
    }
}
*/


for($i=1; $i<31; $i++){
    if($i%15 == 0){
        print("FizzBuzz"."\n");
    }elseif($i%5 == 0){
        print("Buzz"."\n");
    }elseif($i%3 == 0){
        print("Fizz"."\n");
    }else{
        print($i."\n");
    }
}

?>