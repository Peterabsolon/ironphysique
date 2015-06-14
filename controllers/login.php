<?php

/**
* Login
*/
class Login extends Controller
{

    function __construct()
    {
        parent::__construct();
    }

    function index($mobile) {
        $this->view->class = 'page-login';

        $this->view->render('head');

        if($mobile) {
            $this->view->render('header', 1);
        } else {
            $this->view->render('header');
        }

        $this->view->render('login/index');
        $this->view->render('footer');        
    }

    function run($noredirect = 'false') {
        $this->model->run();

        if($noredirect == 'false') {
            header('location: '. URL .'index');
        }
    }
}



