<?php
$days = array('понедельник','вторник','среда','четверг','пятница','суббота','воскресенье');
foreach ($days as $value){
    if($value == 'суббота'||$value == 'воскресенье'){
        echo '<br>' . '<b>' . $value . '</b>';
    }else{echo '<br>' . $value;}

}