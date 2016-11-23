<?php

const PAGES_PATH = __DIR__ . '/pages';

/**
 * Renders the content of the page
 *
 * @param string $page Page name to render.
 *
 * @return string
 */
function renderPage($page)
{
    $fileName = PAGES_PATH . "/{$page}.php";
    ob_start();
    include $fileName;
    include 'header.php';
    include 'footer.php';
    $content = ob_get_contents();
    ob_clean();
    return $content;

}

/**
 * Checks if required page file exists
 *
 * @param $page Page name,
 *
 * @return boolean
 */
function isPageExists($page)
{
    $fileName = PAGES_PATH . "/{$page}.php";
    return file_exists($fileName)
        && is_readable($fileName);

}

/**
 * Checks if current user has been authorized
 *
 * @return boolean
 */
function isUserAuthorized()
{
    return(!empty($_COOKIE['auth'])
         &&!empty($_COOKIE['username']));
}

/**
 * Returns '$param" parametr value from 'requestArray'
 * @param array $requestArray
 * @param $param
 * @param null $default
 * @return mixed|null
 */
function getParamsFromRequest(array $requestArray, $param, $default = null)
{
    return !empty($requestArray[$param])
        ? $requestArray[$param]
        : $default;
}