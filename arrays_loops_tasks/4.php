<?php
/**
 * Created by PhpStorm.
 * User: alex
 * Date: 29.11.16
 * Time: 8:37
 */
$arr = array('green'=>'green colour', 'red'=>'red colour','blue'=>'blue colour');
foreach ($arr as $key=>$value){
    echo '<br>' . $key;
}
foreach ($arr as $key=>$value){
    echo '<br>' . $value;
}