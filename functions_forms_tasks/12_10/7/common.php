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
    //$result = file_put_contents($handle, $data . PHP_EOL, file_get_contents($handle));
    fclose($handle);
    return !empty($result);
};

/**
 * Checks if storage file can be used.
 *
 * @return boolean
 *
 */
function isStorageExists()
{
    return file_exists(STORAGE_FILENAME)
        && is_readable(STORAGE_FILENAME);
}

/**
 * Returns a list of comments from storage.
 *
 * @returns array
 */
function getComments()
{
    if(!isStorageExists()){
        return[];
    }
    $comments = file(STORAGE_FILENAME);
    return array_map('unserialize', $comments);
}

/**
 * Prepares comment body for safe storing
 *
 * @param string $body Body container
 * @return string
 */
function processCommentBody($body)
{
    //$body = strip_tags($body, '<br>');
    $body = htmlspecialchars($body);// $body = htmlspecialchars_decoder($body);
    $body = nl2br($body);
    return str_replace(["\r", "\n"], '', $body);
}
/** Remotesbad words from the comment
 *
 * @param string $comment
 * @return string
 */
function prepareOutput($comment)
{
    $badWords = loadBadWords();
    return str_ireplace($badWords, '*cencored*', $comment);
}

/**
 * Returns a set of bad words to replace
 * @return array
 */
function loadBadWords()
{
    $file = 'badwords.txt';
    $words = file($file);
    array_walk($words, function (&$item) {
        $item = trim($item, "\r\n");
    });
    return array_filter($words);
}