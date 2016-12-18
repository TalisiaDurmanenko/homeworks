<?php

$visitorId = !empty($_COOKIE['visitorId']) ? $_COOKIE['visitorId'] : null;


if ($visitorId) {
    setcookie(
        'visitorId', // name
        $visitorId, // value
        time() +3600, //life time
        '/' // way

    );
}
var_dump($_COOKIE);