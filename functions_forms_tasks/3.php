<form action="3.php" method="post">
    <input type="number" name="countSymbols">
    <input type="submit" name="send">
</form>
<?php

function getWordsFromFile($fileName,$countSymbols){
    $fileContent = file_get_contents($fileName);
    $words = explode(', ',$fileContent);
    foreach ($words as $key=>$word){
        var_dump(mb_strlen($word, 'UTF-8'));
        if(mb_strlen($word, 'UTF-8')<=$countSymbols){
            unset($words[$key]);
        }
    }
    $words = implode(", ", $words);
    return $words;
}

$fileName = "words.txt";
if(isset($_POST['countSymbols'])){
    $countSymbols = $_POST['countSymbols'];
    var_dump($countSymbols);
    $words = getWordsFromFile($fileName,$countSymbols);
    var_dump($words);
}


//getWordsFromFile($words);
//var_dump(getWordsFromFile($words));


?>