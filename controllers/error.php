<?php

/**
* Error
*/
class Error extends Controller
{

    function __construct()
    {
        parent::__construct();
    }

    function index($msg = null) {
        $this->view->title = '404';
        if(isset($msg)) {
            $this->view->msg = $msg;
        } else {
            $this->view->msg = 'This page doesnt exist';
        }

        $this->view->render('header');
        $this->view->render('error/index');
        $this->view->render('footer');
    }
}