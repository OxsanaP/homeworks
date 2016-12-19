<?php
$day = 'понедельник';
$days = array('понедельник','вторник','среда','четверг','пятница','суббота','воскресенье');
foreach ($days as $value){
    if($value ==$day){
        echo '<br>' . '<i>' . $value . '</i>';
    }else{echo '<br>' . $value;}

}