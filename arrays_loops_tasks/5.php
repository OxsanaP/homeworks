<?php
/**
 * Created by PhpStorm.
 * User: alex
 * Date: 29.11.16
 * Time: 8:42
 */
$arr = array('Koly' =>'200', 'Vasy'=>'300', 'Petr'=>'400');
foreach ($arr as $key=>$value){

    $message = $key . ' is salary  ' .$value . ' USD';
    echo '<br>'.$message;
}