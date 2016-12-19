<?php
/**
 * Created by PhpStorm.
 * User: alex
 * Date: 30.11.16
 * Time: 6:32
 */
$arr = array('green'=>'зеленый', 'red'=>'красный','blue'=>'голубой');
$en =array ();
$ru = array();
foreach ($arr as $key => $value){
    $en[] = $key;
    $ru[]= $value;
}
var_dump($en);
var_dump($ru);



