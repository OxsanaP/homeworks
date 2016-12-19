<?php
function showFiles($path,$word){
    if(!is_dir($path)){
        echo "Directory does not exist";
        return;
    }
    $files = scandir($path);
    foreach ($files as $file){
        $data = file_get_contents($path .'/' . $file);
        if(strpos($data,$word)!== false){
            echo $file . '<br>';
        }

    }

}
showFiles('/home/alex/KSUHA/www/testsite/functions_forms_tasks',"showFiles");