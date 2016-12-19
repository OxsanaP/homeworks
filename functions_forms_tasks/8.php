<html>
<body>
<?php
function addComment($coment, $fileName){
    $blackWords = getDataFromFile('blacklist.txt', ',');
    $status = true;
    foreach ($blackWords as $word){
        if(strpos($coment,$word)!==false){
            $status = false;
            break;
        }
    }
    if($status){
        $f=fopen($fileName, 'a');
        $coment.= '====';
        fwrite($f,$coment);
        fclose($f);
    }else{
        echo "Коментарий не корректный";
    }

    }
function getDataFromFile($fileName, $delim = '===='){
    $data = file_get_contents($fileName);
    $data = explode($delim,$data);
     return $data;
}

function render($fileName){
    $comments = getDataFromFile($fileName);
    foreach ($comments as $comment){
        echo '<p>' . $comment . '</p>';
    }

}

$fileName = "comment.txt";
if(isset($_POST['comment'])){
    addComment($_POST['comment'],$fileName);
}
render($fileName);

?>
<form action="8.php" method="post">
    <textarea name="comment"></textarea>
    <input type="submit">
</form>
</body>
</html>