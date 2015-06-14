<?php

/**
* Dashboard
*/
class Dashboard extends Controller
{

    public function __construct()
    {
        parent::__construct();
        Auth::handleLogin();
        $this->view->js = array('dashboard/js/default.js');
    }

    public function index($mobile)
    {
        $this->view->title = 'Nastavenia účtu';
        if($mobile) {
            $this->view->render('header', 1);
        } else {
            $this->view->render('header');
        }
        $this->view->render('dashboard/index');
        $this->view->render('footer');
    }


    public function change($mobile)
    {
        $this->view->title = 'Zmeniť údaje';
        $this->view->user = $this->model->userSingleList(Session::get('userid'));
        if($mobile) {
            $this->view->render('header', 1);
        } else {
            $this->view->render('header');
        }
        $this->view->render('dashboard/change');
        $this->view->render('footer');
    }

    public function change_save()
    {
        $this->model->change_save(Session::get('userid'));
    }

    public function logout()
    {
        Session::destroy();
        header('location: ' . URL . 'index');
        exit;
    }

    public function xhrInsert()
    {
        $this->model->xhrInsert();
    }

    public function xhrGetListings()
    {
        $this->model->xhrGetListings();
    }

    public function xhrDeleteListing()
    {
        $this->model->xhrDeleteListing();
    }
}
