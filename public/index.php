<?php

require '../vendor/autoload.php';

$hello = new \App\Wcs\Hello();
echo $hello->talk();
$helloworld = new \HelloWorld\SayHello();
echo "\n";

echo $helloworld->world();