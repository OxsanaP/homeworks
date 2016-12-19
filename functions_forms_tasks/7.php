<html>
<body>
<?php
function addComment($coment, $fileName)
{
    $data = getComments($fileName);
    $data[] = $coment;
    file_put_contents($fileName, serialize($data));
}

function getComments($fileName)
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
    $comments = getComments($fileName);
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
<form action="7.php" method="post">
    <textarea name="comment"></textarea>
    <input type="submit">
</form>
</body>
</html>
