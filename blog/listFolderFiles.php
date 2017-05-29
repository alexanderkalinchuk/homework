<?php
// функция отображения каталога директории

function listFolderFiles($dir){
    $files = scandir($dir);
    echo '<ol>';
    foreach($files as $item){
        if($item != '.' && $item != '..'){
            echo '<li>'.$item.' - '."<a href='./$item'>Edit</a>";
            if(is_dir($dir.'/'.$item)) listFolderFiles($dir.'/'.$item);
            echo '</li>';
        }
    }
    echo '</ol>';
}

?>