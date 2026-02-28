<?php 

use Pecee\SimpleRouter\SimpleRouter;

// Auto load the vendor files
require_once __DIR__.'/../vendor/autoload.php';

SimpleRouter::get('/phpmvc', function() {
    return 'Hello world';
});