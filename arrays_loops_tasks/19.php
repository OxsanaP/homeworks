<?php
$day = date('l');
$days = array(
    'Monday' => 'понедельник',
    'Tuesday' => 'вторник',
    'Wednesday' => 'среда',
    'Thursday' => 'четверг',
    'Friday' => 'пятница',
    'Saturday' => 'суббота',
    'Sunday' => 'воскресенье'
);
foreach ($days as $id=>$value){
    if($id ==$day){
        echo '<br>' . '<i>' . $value . '</i>';
    } else {
        echo '<br>' . $value;
    }

}