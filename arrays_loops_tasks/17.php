<?php
$month = 'декабрь';
$months = array('январь','февраль','март','апрель','май','июнь','июль','август','сентябрь','октябрь','ноябрь','декабрь');
foreach ($months as $value){
    if ($month==$value){
        echo '<b>' . $month . '</b>';
    }else{echo $value . '<br>';}
}