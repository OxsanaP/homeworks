<html>
<body>
<form action="9.php" method="post">
    <textarea name="stringReversed"></textarea>
    <input type="submit" name="Send">

</form>
<?php
function getStringReversed(){
    if(isset($_POST['stringReversed'])){
        echo $_POST['stringReversed'];
        echo '<br>';
        echo strrev($_POST['stringReversed']);
    }
}

getStringReversed();
?>
</body>
</html>

