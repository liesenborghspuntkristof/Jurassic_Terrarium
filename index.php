<?php
/**
 * Created by PhpStorm.
 * User: gilles.azais
 * Date: 1/8/2016
 * Time: 12:22 PM
 */
define('APPLICATION_PATH','Business/');
define('SYSTEM_PATH','Business/system/');


require_once(SYSTEM_PATH . 'controller/Controller.php');
require_once(SYSTEM_PATH . 'controller/input.php');
require_once(APPLICATION_PATH . 'controllers/HomeController.php');
require_once(APPLICATION_PATH . 'controllers/AdminController.php');
require_once(SYSTEM_PATH . 'controller/Loader.php');
require_once(SYSTEM_PATH . 'controller/FrontController.php');


$frontController = new FrontController();
$frontController->run();