<?php
namespace App\Controller;

use App\Controller\Controller as Controller;
use Klein\Response;
use Klein\Request;
use Klein\ServiceProvider;
use Klein\App;

/*
 * Controller to show use of templating in routes 
 * both secure and unsecure
 */

class HomeController extends Controller
{
    public function homePage(Request $request, Response $response, ServiceProvider $service, App $app)
    {   
        $em = $this->getEntityManager($app->applicationConfiguration);
        
        try {
            $profile = $em->getRepository('App\Model\Profile')->findBy(array('userId' => '1'));
        }catch(\Exception $e){
            echo $e->getMessage();
        }
        
        return $app->templateEngine->render('index.html.twig', array('user' => $profile[0]->getName(), 'progName' => $app->applicationConfiguration->getApplicationName()));
    }
    
    public function secureHomePage(Request $request, Response $response, ServiceProvider $service, App $app)
    {
        //If you want to authenticate the route
        //auth() will either route you off to the login or return the user and carry on 

        try {
            $user = $this->auth($app->applicationConfiguration, $request, $response);
        }catch(\Exception $e){
            echo $e->getMessage();
        }
    
        return $app->templateEngine->render('secure.html.twig', array('user' => $user->getName(), 'progName' => $app->applicationConfiguration->getApplicationName()));
    }
}