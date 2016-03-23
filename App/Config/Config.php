<?php
namespace App\Config;

/*
 * Application Configuration class 
 */
class Config
{
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

    public function __construct()
    {
        $this->setDbServer("");
        $this->setDbDriver("");
        $this->setDbUser("");
        $this->setDbPasswd("");
        $this->setDbName(""); 
        
        $this->setAppRoot("");
        $this->setViewFolder("");
        $this->setEntityFolder(array());
        $this->setApplicationName("");
        $this->setErrorLevel("Production");
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
