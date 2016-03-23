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

        //Do your logic here
        //For now I'm just going to assume the logic passed 
        //and we will go get the passed user object for the sake of the demo.
        $authenticated = true;
 
        if(!$authenticated)
        {
            //If not authenticated redircted to your login page or somewhere
            //$response->redirect("");
        }
        else
        {
            try 
            {
                $user = $em->getRepository('App\Model\Profile')->findBy(array('userId' => '2'));
            }
            catch(\Exception $e)
            {
                throw new Exception($e->getMessage());
            }
        }

        return $user[0];
    }
}