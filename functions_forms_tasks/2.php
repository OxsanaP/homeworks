<html>
<head>
    <title></title>
</head>
<body>
<form action="2.php" method="post">
<textarea name="longerWord" placeholder="write here your text"></textarea>
<input type="submit" name="Send">
</form>

<?php
function getTop3(){
    $top1 = "";
    $top2 = "";
    $top3 = "";
    if(isset($_POST['longerWord'])){
        $words =  explode(" ",$_POST['longerWord']);
        foreach ($words as $word) {
            if (strlen($top1) < strlen($word)) {
                $top3 = $top2;
                $top2 = $top1;
                $top1 = $word;
            } elseif (strlen($top2) < strlen($word)) {
                $top3 = $top2;
                $top2 = $word;
            }elseif (strlen($top3) < strlen($word)) {
                $top3 = $word;

            }
        }

    }
    return array($top1,$top2, $top3);
}

$top = getTop3();
if(!empty($top[0])) {
    echo '<p> TOP1 - '. $top[0] .'</p>';
    echo '<p> TOP2 - '. $top[1] .'</p>';
    echo '<p> TOP3 - '. $top[2] .'</p>';
}
?>
</body>
</html>
