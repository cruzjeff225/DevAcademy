<?php
// router.php

// If the request is for a static file, serve it directly
if (php_sapi_name() === 'cli-server') {
    $file = __DIR__ . '/public' . $_SERVER['REQUEST_URI'];
    if (is_file($file)) {
        return false; // PHP will serve the file directly
    }
}

// If not existing file, route to the index.php
require __DIR__ . '/public/index.php';
