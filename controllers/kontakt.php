<?php

/**
* Kontakt
*/
class Kontakt extends Controller
{
  function __construct()
  {
    parent::__construct();
  }

function index($mobile) {
    $this->view->class = 'page-kontakt page-nohero';

    $this->view->render('head');

    if($mobile) {
        $this->view->render('header', 1);
    } else {
        $this->view->render('header');
    }

    $this->view->render('kontakt/index');
    $this->view->render('footer');
  }
}