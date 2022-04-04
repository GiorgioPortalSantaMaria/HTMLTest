<?php

 /**
 * Globals Const
 */

use Config\Request;

use function PHPSTORM_META\type;

define("DS", DIRECTORY_SEPARATOR);
define('ROOT', realpath(dirname(__FILE__)) . DS);
define("URL", "http://" . $_SERVER['HTTP_HOST']);

    require "Config/Autoload.php";
    Config\Autoload::run();
    require_once "Views\Template.php";
    Config\Enrutador::run(new Request());

?>

