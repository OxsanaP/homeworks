<?php
$month = date('n') - 1;
$months = array('январь', 'февраль', 'март', 'апрель', 'май', 'июнь', 'июль', 'август', 'сентябрь', 'октябрь', 'ноябрь', 'декабрь');
foreach ($months as $id => $value) {
    if ($month == $id) {
        echo '<b>' . $value . '</b>';
    } else {
        echo $value . '<br>';
    }
}