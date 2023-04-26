<?php
$arrayList = [
	[3, 5, 1, 0, 9, 12],
	[1, 2, 14, 10, 19, 1],
	[0, 3, 3, 3, 7, 2]
];
foreach ($arrayList as $array) {
    $arrayThree = [];
    foreach ($array as $num){
        if($num % 3 == 0){
            $arrayThree[] = $num;
        }
    }
    if(empty($arrayThree)){
        $max_value = max($array);
    }else{
        $max_value = max($arrayThree);
    } 
    echo $max_value. "\n";

}








