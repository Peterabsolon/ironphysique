<?php

/**
* Index
*/
class Index extends Controller
{
    function __construct()
    {
        parent::__construct();
        @session_start();
    }

    function index($mobile) {
        $this->view->title = 'Domov';
        $this->view->class = 'page-index';
        $this->view->active = 'index';

        $this->view->render('head');

        if($mobile) {
            $this->view->render('header', 1);
        } else {
            $this->view->render('header');
        }

        $this->view->render('index/index');
        $this->view->render('footer');
    }
}

// productid, categoryid, name, picture, price, size, instock

