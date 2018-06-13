<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
define('BASE_DIR', __DIR__);
use Src;
require_once BASE_DIR . '/vendor/autoload.php';
require_once 'config.php';
require_once 'vendor/symfony/class-loader/Psr4ClassLoader.php';

$loader = new \Symfony\Component\ClassLoader\Psr4ClassLoader();
$loader->addPrefix('Src\Messages', __DIR__.'/src/');

$loader->register();
$loader->loadClass(Src\Messages::class);
echo '<pre>';
var_dump($loader);

$test = new Src\Messages($settings);



