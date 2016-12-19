<?php
$str = "а васька слушает да ест. а воз и ныне там. а вы друзья как ни садитесь, все в музыканты не годитесь. а король-то — голый. а ларчик просто открывался.а там хоть трава не расти.";

function  unFirst($str){
    $partRow = explode('. ',$str);
    foreach ($partRow as $key=>$item){
        $partRow[$key] = mb_strtoupper(mb_substr($item, 0, 1)) . mb_substr($item, 1);
    }
    $str = implode('. ',$partRow);
    return $str;
}


var_dump(unFirst($str));