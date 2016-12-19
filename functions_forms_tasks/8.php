<html>
<body>
<?php
function addComment($coment, $fileName)
{
    $blackWords = getBlackList();
    $status = true;
    foreach ($blackWords as $word) {
        if (strpos($coment, $word) !== false) {
            $status = false;
            break;
        }
    }
    if ($status) {
        $data = getDataFromFile($fileName);
        $data[] = $coment;
        file_put_contents($fileName, serialize($data));
    } else {
        echo "Коментарий не корректный";
    }
}

function getBlackList()
{
    $data = file_get_contents('blacklist.txt');
    $data = explode(',', $data);
    return $data;
}

function getDataFromFile($fileName)
{
    $data = file_get_contents($fileName);
    $result = array();
    if (!empty($data)) {
        $result = unserialize($data);
    }
    return $result;
}

function render($fileName)
{
    $comments = getDataFromFile($fileName);
    foreach ($comments as $comment) {
        echo '<p>' . $comment . '</p>';
    }

}

$fileName = "comment.txt";
if (isset($_POST['comment'])) {
    addComment($_POST['comment'], $fileName);
}
render($fileName);

?>
<form action="8.php" method="post">
    <textarea name="comment"></textarea>
    <input type="submit">
</form>
</body>
</html>