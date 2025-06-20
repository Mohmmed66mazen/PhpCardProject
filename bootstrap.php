<?php
spl_autoload_register(function($class) {
    $root = $_SERVER['DOCUMENT_ROOT'];
    $file = $root
          . DIRECTORY_SEPARATOR
          . str_replace('\\', DIRECTORY_SEPARATOR, ltrim($class, '\\'))
          . '.php';
    if (file_exists($file)) {
        require_once $file;
    }
});