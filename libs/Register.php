<?php

/**
* Register
*/
class Register
{
	
	function __construct()
	{
		
	}

    public function register() 
    {
        $defaultRole = 'default';
        $shippingdata = isset($_POST['shippingdata']);

        if(!$shippingdata) {
            $this->model->register();
            header('location: '. URL .'index');
        } else {
            $this->model->register();
        }
    }    	
}