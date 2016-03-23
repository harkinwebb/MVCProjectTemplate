<?php
namespace App\Controller;

use App\Controller\Controller as Controller;
use Klein\Response;
use Klein\Request;
use Klein\ServiceProvider;
use Klein\App;

/*
 * Controller for end points that return Json data 
 * instead of a view
 */
class JsonController extends Controller
{
    public function getUsers(Request $request, Response $response, ServiceProvider $service, App $app)
    {
        $this->auth($app->applicationConfiguration, $request, $response);
        
        $em = $this->getEntityManager($app->applicationConfiguration);
        
        try
        {
            $profil = $em->getRepository('App\Model\Profil')->findAll();
        }
        catch(\Exception $e)
        {
            echo $e->getMessage();
            die();
        }
        
        $userArray = array();
        
        foreach($profil as $user)
        {   
            $userArray[] = $user->properitesToArray();    
        }
        
        return $response->json(json_encode($userArray));
    }
}

?>