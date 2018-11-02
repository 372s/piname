<?php
require __DIR__.'/../vendor/autoload.php';

\Pinatra\Routing\Router::$baseNamespace = '\\Controllers\\';

get('/', function() {
    echo "GET /";
});


get('home', 'HomeController@home');