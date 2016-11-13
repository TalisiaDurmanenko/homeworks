<?php
    function getDirectoryListing($dirName){
        //якщо такої теки нема, можна ввести умову:
        if(!is_dir($dirName)){
            trigger_error('Directory does not exist.', E_USER_WARNING);
            return null;
        }
        chdir($dirName);

        $h = opendir('.');
        $files = [];
        while (($f = readdir($h)) !== false) {
            if ($f != '.'
                && $f != ".."
            ) {
                $files[] = $f;
            }
        }
        return $files;
    }
    $list = getDirectoryListing('../../../../../..');
    print_r($list);



