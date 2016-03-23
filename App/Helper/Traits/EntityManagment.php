<?php
namespace App\Helper\Traits;

use App\Config\Config;
use Doctrine\ORM\Tools\Setup;
use Doctrine\ORM\EntityManager;

trait EntityManagment {
    
    protected function getEntityManager(Config $applicationConfiguration) 
    {
        $connectionConfig = Setup::createAnnotationMetadataConfiguration($applicationConfiguration->getEntityFolder(), true);
        
        $conParams = array(
            'dbname' => $applicationConfiguration->getDbName(),
            'user' => $applicationConfiguration->getDbUser(),
            'password' => $applicationConfiguration->getDbPasswd(),
            'host' => $applicationConfiguration->getDbServer(),
            'driver' => $applicationConfiguration->getDbDriver(),
        );    
        
        return EntityManager::create($conParams, $connectionConfig);
    }
}