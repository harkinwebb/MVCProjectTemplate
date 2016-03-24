<?php
namespace App\Helper\Traits;

trait FileManagment {
    
    protected function getFileContents($fileName = "") 
    {
        $fileContents = file_get_contents($fileName);

        if(!$fileContents)
        {
            throw new \Exeption('File could not be opened');
        }

        return $fileContents;
    }
}