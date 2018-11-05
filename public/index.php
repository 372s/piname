<?php
require __DIR__.'/../vendor/autoload.php';

\Pinatra\Routing\Router::$baseNamespace = '\\Controllers\\';
define('VIEW_BASE_PATH', dirname(dirname(__FILE__)).'/views/');


// get('/', function() {
//     echo "GET /";
// });


get('home', 'HomeController@home');