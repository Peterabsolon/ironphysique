<?php

/**
* Damy
*/
class Damy extends Controller
{
  function __construct()
  {
    parent::__construct();
  }

function index($mobile) {
    $this->view->class = 'page-damy';

    $this->view->render('head');

    if($mobile) {
        $this->view->render('header', 1);
    } else {
        $this->view->render('header');
    }

    $this->view->render('damy/index');
    $this->view->render('footer');
  }
}