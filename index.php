<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
require_once 'src/Messages.php';
require_once 'config.php';

$test = new \Src\Messages($settings);