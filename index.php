<?php 
define("DS", DIRECTORY_SEPARATOR);
define('ROOT', realpath(dirname(__FILE__)). DS);
require_once "config/Autoload.php";
Config\Autoload::run();
//new Config\Request();
Config\Enrutador::run(new Config\Request()); 
?>