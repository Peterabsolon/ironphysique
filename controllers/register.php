<?php

/**
* Register
*/
class Register extends Controller
{
	
	function __construct()
	{
		parent::__construct();
	}

	public function index() {
		$this->view->title = 'Registrácia';
        $this->view->message = Session::get('message');

		// TODO:
        if(false) {
            $this->view->render('header', 1);
        } else {
            $this->view->render('header');
        }

        $this->view->render('register/index');
		$this->view->render('footer');
	}

    public function run() 
    {
        $this->model->run();
        header('Location: ' . URL . 'dashboard/welcome');
    }    	
}