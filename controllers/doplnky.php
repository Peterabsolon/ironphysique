<?php

/**
* Doplnky
*/
class Doplnky extends Controller
{
  function __construct()
  {
    parent::__construct();
  }

function index($mobile) {
    $this->view->class = 'page-doplnky';

    $this->view->render('head');

    if($mobile) {
        $this->view->render('header', 1);
    } else {
        $this->view->render('header');
    }

    $this->view->render('doplnky/index');
    $this->view->render('footer');
  }
}