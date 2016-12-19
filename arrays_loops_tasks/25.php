<?php


$arr = array();
rand(1,100);

for($i=0;$i<=10;$i++){
    $arr []= rand(1,100);
}
$min = $arr[0];
$minIndex=0;
$max = $arr[0];
$maxIndex = 0;
var_dump($arr);
foreach ($arr as $key=>$value){
  if($value<$min){
      $min=$value;
      $minIndex = $key;
  }
  if($value>$max){
      $max=$value;
      $maxIndex = $key;
  }
}
$tmp=$arr[$minIndex];
$arr[$minIndex]=$arr[$maxIndex];
$arr[$maxIndex]=$tmp;


