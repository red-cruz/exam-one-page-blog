<?php

namespace helpers;

$rootDirectory = 'http://localhost';
define('BASE_PATH', $rootDirectory . '/projects/exam-one-page-blog/');

function redirect($url)
{
    header("Location: " . BASE_PATH . $url);
    exit;
}

/**
 * returns the path to controller
 *
 * @param string $filename
 *
 * @return string
 */
function controller_path(string $filename): string
{
    $path = BASE_PATH . "/controller/$filename.php";
    return $path;
}
