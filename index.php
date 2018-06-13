<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

define('BASE_DIR', __DIR__);
require_once __DIR__.'/vendor/autoload.php';
use App\App;

App::run();