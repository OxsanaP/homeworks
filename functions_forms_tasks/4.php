<?php
function showFiles($path){
    if(!is_dir($path)){
        echo "Directory does not exist";
        return;
    }
   $files = scandir($path);
    foreach ($files as $file){
        echo $file . '<br>';
    }

}
showFiles('/home/alex/KSUHA/www/testsite/functions_forms_tasks');