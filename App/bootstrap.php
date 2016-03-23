<?php
//*********Bootstrap for all applications*****************// 

require_once dirname(__DIR__ ). '/vendor/autoload.php';

use \Klein\Klein as Router;
use \App\Config\Config;

$applicationConfiguration = new Config();

//**** Application Settings ************************//

//Db Settings 
$applicationConfiguration->setDbServer("localhost");
$applicationConfiguration->setDbDriver("pdo_mysql");
$applicationConfiguration->setDbUser("root");
$applicationConfiguration->setDbPasswd("password");
$applicationConfiguration->setDbName("test");

//Paths
$applicationConfiguration->setAppRoot("/");
$applicationConfiguration->setViewFolder(__DIR__."/View/");
$applicationConfiguration->setEntityFolder(array(__DIR__."/Model/"));

//App
$applicationConfiguration->setApplicationName('No Framework MVC App');

//Error Level
$applicationConfiguration->setErrorLevel('Development');

//********************************************************//
//Setup the enviroment 
//********************************************************//

if($applicationConfiguration->getErrorLevel() == "Development")
{
	ini_set('display_errors', 1);
	ini_set('display_startup_errors', 1);
	error_reporting(E_ALL);
}

$templateLoader = new Twig_Loader_Filesystem($applicationConfiguration->getViewFolder());
$templateEngine = new Twig_Environment($templateLoader);

$routingEngine = new Router();

$routingEngine->app()->register('templateEngine', function() use ($templateEngine) {
        return $templateEngine;
    });

$routingEngine->app()->register('applicationConfiguration', function() use ($applicationConfiguration) {
        return $applicationConfiguration;
    });


