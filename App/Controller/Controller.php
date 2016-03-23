<?php
namespace App\Controller;

use App\Helper\Traits\EntityManagment;
use App\Config\Config;
use Klein\Request;
use Klein\Response;

/*
 * Abstract Controller class
 * Allows access to shared cotroller methods and properties
 */

abstract class Controller
{
    use EntityManagment;
    
    /*
     * What ever your logic is for working out if a user is authenticated 
     */
    protected function auth(Config $applicationConfiguration, Request $request, Response $response)
    {
        $em = $this->getEntityManager($applicationConfiguration);
        
        $authenticated = false;
 
        if(!$authenticated)
        {
            //$response->redirect("/MDWW1H00/?fwd=".$requestUrl);
        }
        
        return $user;
        
    }
}