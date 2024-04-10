<?php

use App\Classes\Database;
use App\Classes\ErrorHandler;

 if (!isset($_SESSION)) session_start();
 define('APP_ROOT', realpath(__DIR__ . '/../'));
 define('URL_ROOT',"http://okpar.me/");

 
 require_once APP_ROOT . '/vendor/autoload.php';
 set_error_handler([new ErrorHandler(),'handelErrors']);
 require_once APP_ROOT.'/app/config/_env.php';
//  require_once APP_ROOT.'/app/controllers/BaseController.php';this is first work
//  require_once APP_ROOT.'/app/routing/RouteDispatcher.php'; this is top  router is no work first
 new Database();
 require_once APP_ROOT.'/app/routing/router.php';
 
 
 
?>