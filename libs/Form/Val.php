<?php

/**
* Val
*/
class Val
{
    public function minlength($data, $arg)
    {
        if (strlen($data) < $arg) {
            return "Your string can only be $arg long";
        }
    }

    public function maxlength($data, $arg)
    {
        if (strlen($data) > $arg) {
            return "Your string can only be $arg long";
        }
    }

    public function digit($data)
    {
        if (!ctype_digit($data)) {
            return "Your string must be a digit";
        }
    }

    public function match($string, $match, $message = "Strings don't match")    
    {
        if (strcmp($string, $match)) {
            return $message;
        }
    }

    public function email($email) 
    {
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
          return "Invalid email address";
        }
    }

    public function __call($name, $arg)
    {
        throw new Exception("$name does not exist inside of : " . __CLASS__);
    }
}