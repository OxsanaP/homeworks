<?php
$arr = array (1, 2, 3, 4, 5, 6, 7, 8, 9);
foreach ($arr as $key=>$item) {
echo $item . ',';
    if(($key+1)%3==0){
        echo '<br>';
    }
 }










