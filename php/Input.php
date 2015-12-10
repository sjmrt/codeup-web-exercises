<?php

class Input
{
    /**
     * Check if a given value was passed in the request
     *
     * @param string $key index to look for in request
     * @return boolean whether value exists in $_POST or $_GET
     */
    public static function has($key)
    {
        if(isset($_REQUEST[$key])){
            return true;
        }
        return false;
    }

    public static function notEmpty($key)
    {
        if(isset($_REQUEST[$key]) && $_REQUEST[$key] != ''){
            return true;
        }
    }

    /**
     * Get a requested value from either $_POST or $_GET
     *
     * @param string $key index to look for in index
     * @param mixed $default default value to return if key not found
     * @return mixed value passed in request
     */
    public static function get($key, $default = null)
    {
        if(self::has($key)){
            return $_REQUEST[$key];
        } 
        return $default;
    }

    public static function escape($input)
    {
        return htmlspecialchars(strip_tags($input));
    } 

    ///////////////////////////////////////////////////////////////////////////
    //                      DO NOT EDIT ANYTHING BELOW!!                     //
    // The Input class should not ever be instantiated, so we prevent the    //
    // constructor method from being called. We will be covering private     //
    // later in the curriculum.                                              //
    ///////////////////////////////////////////////////////////////////////////
    private function __construct() {}

    public static function getString($key)
    {
        $value = trim(static::get($key));
        // $isString = settype($value, 'string');
        if(!isset($value)){
             throw new Exception('Input must not be null!');
        }
        // Check if value is a string
        if (!is_string($_REQUEST[$key])) {
            throw new Exception('Input must be a string!');
        }
        return $value;
    }    
    }

    public static function getNumber($key)
    {
        $value = str_replace(',', '', static::get($key));
        if(!isset($value)){
            throw new Exception('Input must not be a null!');
        }
        // Check if value is a string
        if (!is_numeric($_REQUEST[$key])) {
            throw new Exception('Input must be a number!');
        }
        return $value;

    }

    public static function getDate($key)
    {
        $value = trim(static::get($key));
        $format = 'Y-m-d';
        $dateObject = DateTime::createFromFormat($format, $value);
        if($dateObject){
            return $dateObject->date;
        }else{
            throw new Exception('Input must be a valid date!');
        }
    }
}
