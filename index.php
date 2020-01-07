<?php 
session_start();
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Methods: *");
use Core\Core;

require 'config.php';
require 'vendor/autoload.php';

$core = new Core();
$core->run();