<?php 
error_reporting(0);
define("DS", DIRECTORY_SEPARATOR);
define('ROOT', realpath(dirname(__FILE__)). DS);
define("URL", "http://localhost/CRUDMVC/");
require_once "config/Autoload.php";
Config\Autoload::run();
require_once "views/template.php";
Config\Enrutador::run(new Config\Request()); 
?>