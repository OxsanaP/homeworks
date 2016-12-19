<?php
$str = 'А Васька слушает да ест. А воз и ныне там. А вы друзья как ни садитесь, все в музыканты не годитесь. А король-то — голый. А ларчик просто открывался. А там хоть трава не расти.';



function replaceStr($str){
    $partStr = explode('. ',$str);
$newArr = array();
for($i=count($partStr)-1;$i>=0;$i--){
    $newArr[] = $partStr[$i];
    }
    $str = implode('. ',$newArr);

    return $str;
}
echo $str . '<br>' ;

echo replaceStr($str);
