<?php
require __DIR__ . '/../vendor/autoload.php';
use App\Wcs\Hello;

$say_hello = new Hello;
echo $say_hello->talk();