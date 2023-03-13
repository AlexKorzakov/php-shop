<?php
// $string = '21-11-2015';

// $pattern = '/([0-9]{2})-([0-9]{2})-([0-9]{4})/';

// $replacement = 'Month $2, Day $1, Year $3';

// echo preg_replace($pattern, $replacement, $string);


// die;


// settings

ini_set('dislpay_errors',1);
error_reporting(E_ALL);
// ini_set('display_errors', 0);
// ini_set('display_startup_errors', 0);
// error_reporting(E_ALL);

session_start();

//File connection

define('ROOT', dirname(__FILE__));
require_once(ROOT.'/components/Autoload.php');
// require_once(ROOT.'/components/Router.php');
// require_once(ROOT.'/components/Db.php');

//DB connection 



//Calling router

$router = new Router;
$router->run();

?>