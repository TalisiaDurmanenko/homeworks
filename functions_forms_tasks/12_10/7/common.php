<?php
/*
 * This is a file with common functions fpr lecture
 */
/**
 * Redirects users to an URL
 *
 * @param string $url URK for redirect.
 *
 * @return void
 */
function redirect($url){
    header('Location ' . $url); // після редиректу завжди мусить бути екзит, бо інакше весь подальший код виконуватиметься
    exit;
}

const STORAGE_FILENAME = 'comments.txt';

/**
 * Prepares array of data for storage
 *
 * @param array $data Data array
 *
 * @return string|null
 */

function prepareDataForStorage(array $data)
{
    if (empty($data))
    {
        return null;
    }

    return serialize($data);
}

/**
 * Saves incoming data into file.
 *
 * @param string $data Data to save
 *
 * @return boolean
 */

function saveToFile($data)
{
    $handle = fopen(STORAGE_FILENAME, 'a');
    $result = fwrite($handle, $data . PHP_EOL); // результатом fwrite буде кількість байтів, яку вдалося записати
    fclose($handle);
    return !empty($result);
};

/**
 * Checks if storage file can be used.
 *
 * @return boolean
 *
 */

function isStrageExist()
{
    return file_exists(STORAGE_FILENAME)
        && is_readable(STORAGE_FILENAME);
}


