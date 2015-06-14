<?php

/**
* Order
*/
class Order extends Controller
{
    function __construct()
    {
        parent::__construct();
        Auth::handleLogin();
    }

    public function index()
    {
        $this->view->title = 'Order';
        $this->view->render('header');
        $this->view->render('order/index');
        $this->view->render('footer');
    }

    public function place()
    {
        $form = new Form();

        $form->post('item')
             ->post('name')
             ->post('phoneNum')
             ->post('email')
             ->post('address')
             ->post('note');

        $form->submit();

        $data = $form->fetch();

        $this->model->insert('orders', $data);
        header('location: ' . URL . 'order');
    }
}