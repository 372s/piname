<?php
require __DIR__.'/../vendor/autoload.php';

// echo 2222;
$con = new \Controllers\Repository();
echo $con->get('app.name');die;
// get('hi', function() {
//     echo "I am Pinatra framework!";
// });