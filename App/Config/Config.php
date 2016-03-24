<?php
namespace App\Config;

use App\Helper\Traits\FileManagment;

/*
 * Application Configuration class 
 */
class Config
{
    use FileManagment;

    protected $dbServer;
    protected $dbDriver;
    protected $dbUser;
    protected $dbPasswd;
    protected $dbName;
    
    protected $appRoot;
    protected $viewFolder; 
    protected $entityFolder;
    protected $applicationName;

    protected $errorLevel;

    public function __construct($configFile = "")
    {
        if($configFile == "")
        {
            $configFile = __DIR__.'/config.json';
        }

        try{
            $settingString = $this->getFileContents($configFile);
        }catch(\Exeption $e){
            echo $e->getMessage();
        }

        $settingFileObj = json_decode($settingString);

        if(property_exists($settingFileObj, 'dbServer'))
        {
            $this->setDbServer($settingFileObj->dbServer);
        }
        else
        {
            $this->setDbServer("localhost");   
        }
        
        if(property_exists($settingFileObj, 'dbDriver'))
        {
            $this->setDbDriver($settingFileObj->dbDriver);
        }
        else
        {
            $this->setDbDriver("pdo_mysql");
        }

        if(property_exists($settingFileObj, 'dbUser'))
        {
            $this->setDbUser($settingFileObj->dbUser);
        }
        else
        {
            $this->setDbUser("");
        }

        if(property_exists($settingFileObj, 'dbPasswd'))
        {
            $this->setDbPasswd($settingFileObj->dbPasswd);
        }
        else
        {
            $this->setDbPasswd("");
        }

        if(property_exists($settingFileObj, 'dbName'))
        {
            $this->setDbName($settingFileObj->dbName); 
        }
        else
        {
            $this->setDbName(""); 
        }

        if(property_exists($settingFileObj, 'appRoot'))
        {
            $this->setAppRoot($settingFileObj->appRoot);
        }
        else
        {
            $this->setAppRoot("/");
        }

        if(property_exists($settingFileObj, 'viewFolder'))
        {
            $this->setViewFolder("");
        }
        else
        {
            $this->setViewFolder(dirname(__DIR__)."/View/");
        }

        if(property_exists($settingFileObj, 'entityFolder'))
        {
            $this->setEntityFolder(array($settingFileObj->entityFolder));
        }
        else
        {
            $this->setEntityFolder(array(dirname(__DIR__)."/Model/"));
        }

        if(property_exists($settingFileObj, 'applicationName'))
        {
            $this->setApplicationName($settingFileObj->applicationName);
        }
        else
        {
            $this->setApplicationName("");   
        }

        if(property_exists($settingFileObj, 'errorLevel'))
        {
            $this->setErrorLevel($settingFileObj->errorLevel);
        }
        else
        {
            $this->setErrorLevel("Production");
        }
    }
    
    /**
     * @return the $errorLevel
     */
    public function getErrorLevel()
    {
        return $this->applicationName;
    }

    /**
     * @param field_type $errorLevel
     */
    public function setErrorLevel($errorLevel)
    {
        $this->errorLevel = $errorLevel;
    }

    /**
     * @return the $applicationName
     */
    public function getApplicationName()
    {
        return $this->applicationName;
    }

    /**
     * @param field_type $applicationName
     */
    public function setApplicationName($applicationName)
    {
        $this->applicationName = $applicationName;
    }

    /**
     * @return the $dbServer
     */
    public function getDbServer()
    {
        return $this->dbServer;
    }

    /**
     * @return the $dbDriver
     */
    public function getDbDriver()
    {
        return $this->dbDriver;
    }

    /**
     * @return the $dbUser
     */
    public function getDbUser()
    {
        return $this->dbUser;
    }

    /**
     * @return the $dbPasswd
     */
    public function getDbPasswd()
    {
        return $this->dbPasswd;
    }

    /**
     * @return the $dbName
     */
    public function getDbName()
    {
        return $this->dbName;
    }

    /*
     * @return the $appRoot
     */
    public function getAppRoot()
    {
        return $this->appRoot;
    }

    /**
     * @return the $viewFolder
     */
    public function getViewFolder()
    {
        return $this->viewFolder;
    }

    /**
     * @return the $entityFolder
     */
    public function getEntityFolder()
    {
        return $this->entityFolder;
    }

    /**
     * @param string $dbServer
     */
    public function setDbServer($dbServer)
    {
        $this->dbServer = $dbServer;
    }

    /**
     * @param string $dbDriver
     */
    public function setDbDriver($dbDriver)
    {
        $this->dbDriver = $dbDriver;
    }

    /**
     * @param string $dbUser
     */
    public function setDbUser($dbUser)
    {
        $this->dbUser = $dbUser;
    }

    /**
     * @param string $dbPasswd
     */
    public function setDbPasswd($dbPasswd)
    {
        $this->dbPasswd = $dbPasswd;
    }

    /**
     * @param string $dbName
     */
    public function setDbName($dbName)
    {
        $this->dbName = $dbName;
    }

    /**
     * @param string $appRoot
     */
    public function setAppRoot($appRoot)
    {
        $this->appRoot = $appRoot;
    }

    /**
     * @param string $viewFolder
     */
    public function setViewFolder($viewFolder)
    {
        $this->viewFolder = $viewFolder;
    }

    /**
     * @param array $entityFolder
     */
    public function setEntityFolder($entityFolder)
    {
        $this->entityFolder = $entityFolder;
    }

    
}
