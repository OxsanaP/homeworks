<?php
/**
 * Created by PhpStorm.
 * User: alex
 * Date: 30.11.16
 * Time: 13:25
 */
$numbers = array(2, 5, 9, 15, 0, 4);
foreach ($numbers as $value){
    if ($value>3 && $value<10){
        echo '<br>' . $value;
    }
}