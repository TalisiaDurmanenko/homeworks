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
