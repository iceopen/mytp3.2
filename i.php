<?php
define('RUNTIME_PATH',SITE_PATH.'/Runtime/');
define('LOG_PATH', SITE_PATH . '/Logs/');
define("TP_PATH", str_ireplace('\\', '/', dirname(__FILE__)));
require(TP_PATH . "/ThinkPHP/ThinkPHP.php");