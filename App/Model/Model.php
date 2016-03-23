<?php
namespace App\Model;

/*
 * Abstract Model Class 
 * Shared functionalty for child models 
 */
abstract class Model
{
    /**
    * Get models properties as key, value pair array 
    */
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

    /**
    * Convert modals proerties to json array 
    */
    public function toJson()
    {
        return json_encode($this->properitesToArray());
    }
}

?>