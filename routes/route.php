<?php 

use Pecee\SimpleRouter\SimpleRouter;
use App\Controllers\WelcomeController;
use App\Controllers\PortfoliosController;

// Auto load the vendor files 

SimpleRouter::get('/phpmvc', [WelcomeController::class, "hello"]);

SimpleRouter::get('/phpmvc/portfolios', [PortfoliosController::class, "index"]); 

