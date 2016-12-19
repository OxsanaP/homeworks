<?php
/**
 * Created by PhpStorm.
 * User: alex
 * Date: 01.12.16
 * Time: 12:41
 */
$n = 1000;
$num = 0;
do {
    $n=$n/2;
    $num++;
} while($n>50);
echo '<br>' . $n;

echo '<br>' . $num;

