<?php
$string = 'яблоко черешня вишня вишня черешня груша яблоко черешня вишня яблоко вишня вишня черешня груша яблоко черешня черешня вишня яблоко вишня вишня черешня вишня черешня груша яблоко черешня черешня вишня яблоко вишня вишня черешня черешня груша яблоко черешня вишня';

$fruts = explode(' ', $string);
$frutCount = array();
$count = 0;
foreach ($fruts as $item){
    if(isset($frutCount[$item])){
        $frutCount[$item]++;
    } else {
        $frutCount[$item] = 1;
    }

}
arsort($frutCount);
var_dump($frutCount);
