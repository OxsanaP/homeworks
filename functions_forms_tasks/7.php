<html>
<body>
<?php
function addComment($coment, $fileName){

    $f=fopen($fileName, 'a');
    $coment.= '====';
    fwrite($f,$coment);
    fclose($f);
}
function getComments($fileName, $delim = '===='){
    $data = file_get_contents($fileName);
    $data = explode($delim,$data);
    return $data;
}

function render($fileName){
    $comments = getComments($fileName);
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
<form action="7.php" method="post">
    <textarea name="comment"></textarea>
    <input type="submit">
</form>
</body>
</html>
