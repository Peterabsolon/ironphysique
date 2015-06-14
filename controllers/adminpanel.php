<?php

/**
* Adminpanel
*/
class Adminpanel extends Controller
{
    function __construct()
    {
        parent::__construct();
        @session_start();
    }

    function index($mobile) {
        $this->view->title = 'Admin panel';
        $this->view->class = 'page-adminpanel';
        $this->view->active = 'adminpanel';

        $this->view->render('head');

        if($mobile) {
            $this->view->render('header', 1);
        } else {
            $this->view->render('header');
        }

        $this->view->render('adminpanel/adminpanel');
        $this->view->render('footer');
    }
}

// productid, categoryid, name, picture, price, size, instock

