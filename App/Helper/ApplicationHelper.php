<?php
namespace App\Helper;

class ApplicationHelper
{
    public function dd($var)
    {
        echo "<pre>";
            print_r($var);
        echo "<pre>";
        die;
    }
}