<?php
define('DBHOST', 'localhost');
define('DBPORT', '3306');
define('DBUSER', 'root');
define('DBPASS', '');
define('DBNAME', 'estoque');
define('DBENCODING', 'utf8');

define('DS', DIRECTORY_SEPARATOR);

define('PATH_ROOT', dirname(dirname(__FILE__)));
define("APP_PATH", PATH_ROOT . DS . 'app');
define("SYSTEM_PATH", PATH_ROOT . DS . 'system');
define('CONTROLLERS', APP_PATH . DS . 'controllers');
define('VIEWS', APP_PATH . DS . 'views');
define('MODELS', APP_PATH . DS . 'models');
define('TEMPLATE', APP_PATH . DS . 'template');
define('HELPERS', SYSTEM_PATH . DS . 'helpers');
define('SMARTYDIR', APP_PATH . DS . 'views');
define('LIBS', SYSTEM_PATH . DS . 'libs');
define('HTTP_ROOT', 'http://' . $_SERVER['HTTP_HOST']);
?>

