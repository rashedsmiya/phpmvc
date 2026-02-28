<?php

use Pecee\SimpleRouter\SimpleRouter;

require_once __DIR__ ."/vendor/autoload.php";

define("ROOT", __DIR__ ."");
define("VIEWS", ROOT ."/views/");
// define("PUBLIC_PATH", ROOT ."/public/");

/* Load external routes file */
require_once 'routes/route.php';

/**
 * The default namespace for route-callbacks, so we don't have to specify it each time.
 * Can be overwritten by using the namespace config option on your routes.
 */

SimpleRouter::setDefaultNamespace('\App\Controllers');

// Start the routing
SimpleRouter::start();