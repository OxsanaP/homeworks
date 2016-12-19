<html>
<body>
<form action="10.php" method="post">
    <textarea name="str"></textarea>
    <input type="submit" name="Send">

</form>
<?php
function getCountUnic(){
    $count=0;
    if(isset($_POST['str'])){
        echo $_POST['str'];
        echo '<br>';
        $mass = explode(' ',$_POST['str']);
//        $tmp = array();
//        foreach ($mass as $word){
//            if(isset($tmp[$word])){
//                $tmp[$word]++;
//            } else {
//                $tmp[$word]=1;
//            }
//        }
//
//        foreach ($tmp as $item){
//            if($item==1){
//                $count++;
//            }
//        }
        $tmp = array_count_values($mass);
        foreach ($tmp as $item){
            if($item==1){
                $count++;
            }
        }
    }
    return $count;
}

echo  'Uniq words - ' . getCountUnic();
?>
</body>
</html>
