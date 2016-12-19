<?php
$str = '442158755745';
$numb = str_split($str);
var_dump($numb);
$count=0;
foreach ($numb as $value){
    if($value=="8"){
        $count++;
    }
}
echo '<br>' . $count;




