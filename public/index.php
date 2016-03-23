<?php
require_once dirname(__DIR__) . '/App/bootstrap.php';

use App\Controller\HomeController;
use App\Controller\JsonController;

//Application index route 
$routingEngine->respond('GET', $applicationConfiguration->getAppRoot(), [new HomeController(), 'homePage']);

//Secure Page route
$routingEngine->respond('GET', $applicationConfiguration->getAppRoot()."secure", [new HomeController(), 'secureHomePage']);

//Json route or RESTFUL end point 
$routingEngine->respond('GET', $applicationConfiguration->getAppRoot()."users", [new JsonController(), 'getUsers']);

$routingEngine->dispatch();