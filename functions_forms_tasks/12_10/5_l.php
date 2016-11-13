<?php
function getDirectoryListing($dirName, $searchTerm){
    //якщо такої теки нема, можна ввести умову:
    if(!is_dir($dirName)){
        trigger_error('Directory does not exist.', E_USER_WARNING);
        return null;
    }
    chdir($dirName);
    $files = glob("*{$searchTerm}*");
    echo $dirName;
    return $files;
}
$list = getDirectoryListing('../', '5'); // txt може бути будь-де в імені (й розширенні) файлу

print_r($list);



