<?php
$arr = array();
rand(1,100);
for($i=0;$i<100;$i++){
   $arr[]=rand(1,100);
}
$multiplication=1;
foreach ($arr as $key=>$value){
    if($key%2==0){
        $multiplication *= $value;
    }else{
        echo '<br>' . $value;
    }

}
var_dump($multiplication) ;
var_dump($arr);