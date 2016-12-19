<?php
/**
 * Created by PhpStorm.
 * User: alex
 * Date: 29.11.16
 * Time: 8:07
 */
$numbers = array(1, 20, 15, 17, 24, 35);
foreach ($numbers as $value){
    $result = array_sum($numbers);
}
echo '<br>' . $result;