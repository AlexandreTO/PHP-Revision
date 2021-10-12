<?php

error_reporting(-1); // reports all errors
ini_set("display_errors", "1"); // shows all errors
ini_set("log_errors", 1);
ini_set("error_log", "php-error.log");

define("ROOT", dirname(__DIR__));
//phpinfo();

require ROOT . '/Vendor/autoload.php';
/** Chargement de la méthode statique register qui charge les classes automatiquement */
Vendor\Autoload::register();

include ROOT . '/Router/router.php';
