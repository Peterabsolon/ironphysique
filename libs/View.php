<?php

/**
* View
*/
class View
{

    public function render($name, $mobile = false)
    {
    	if($mobile) {
	       require 'views/' . $name . '-mobile.php';
    	}
      
      else require 'views/' . $name .'.php';
    }
}