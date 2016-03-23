<?php
namespace App\Model;

/*
 * Abstract Model Class 
 * Shared functionalty for child models 
 */
abstract class Model
{
    public function properitesToArray()
    {
        $reflection = new \ReflectionObject($this);
        
        $propertyList = $reflection->getProperties();
        $propertyArray = array();
        
        foreach($propertyList as $property)
        {
            $getterName = 'get'.$property->getName();
            $propertyArray[$property->getName()] = trim($this->$getterName());
        }
        
        return $propertyArray;
    }
}

?>