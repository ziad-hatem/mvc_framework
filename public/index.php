<?php
define("ROOT", dirname(__DIR__));
define("DS", DIRECTORY_SEPARATOR);
define("APP", ROOT . DS . 'app' . DS);
define("CONFIG", APP . DS . 'config' . DS);
define("CONTROLLERS", APP . 'controllers' . DS);
define("CORE", APP . 'core' . DS);
define("MODELS", APP . 'models' . DS);
define("VIEW", APP . 'views' . DS);

// Config

define("SERVER", "localhost");
define("USERNAME", "root");
define("PASSWORD", "");
define("DATABASE", "learn");
define("DATABASE_TYPE", "mysql");
define("DOMAIN_NAME", "http: //mvc.test
");

require_once "../vendor/autoload.php";

require_once CORE . "app.php";
$app = new MVC\core\app();
