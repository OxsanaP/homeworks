<html>
<head> <title></title>
</head>
<body>
<form action="1.php" method="post">
    <textarea name="firstTextarea" style="align-content: flex-end" placeholder="White here your text"> </textarea><br/>
    <textarea name="secondTextarea" style="align-content: flex-end" placeholder="White here your text"> </textarea><br/>
    <input type="submit" name="Send" >
</form>

<?php
function getCommonWords($a, $b)
{
    $arr = array();
    foreach ($a as $word){
        if(in_array($word,$b)){
            $arr[]=$word;
        }
    }
    return $arr;
}
if(isset($_POST['firstTextarea']) && isset($_POST['secondTextarea'])){
    $str =  explode(" ",trim($_POST['firstTextarea']));
    var_dump($str) ;
    $str1 = explode(" ",trim($_POST['secondTextarea']));
    var_dump($str1);
    getCommonWords($str,$str1);
}
var_dump(getCommonWords($str,$str1));
?>
</body>
</html>
