<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
require_once __DIR__.'/vendor/autoload.php';
require_once 'config.php';

$messages = new \Src\Messages($settings);
var_dump($messages->getMessages());