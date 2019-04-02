<?php

require '../vendor/autoload.php';
use App\Wcs\Hello;
use HelloWorld\SayHello;


$salut = new SayHello();
$bonjour = new Hello;

echo $salut->world();

echo '<br>';

$bonjour->talk();


?>