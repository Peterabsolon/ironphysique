<?php

/**
* Note
*/
class Note extends Controller
{

    function __construct()
    {
        parent::__construct();
        Auth::handleLogin();
    }

    public function index()
    {
        $this->view->title = 'Note';
        $this->view->noteList = $this->model->noteList();
        $this->view->render('header');
        $this->view->render('note/index');
        $this->view->render('footer');
    }

    public function create()
    {
        $data = array(
            'title' => $_POST['title'],
            'content' => $_POST['content']
        );

        $this->model->create($data);
        header('location: ' . URL . 'note');
    }

    public function edit($id)
    {
        $this->view->title = 'Edit note';
        $this->view->note = $this->model->noteSingleList($id);
        $this->view->render('header');
        $this->view->render('note/edit');
        $this->view->render('footer');
    }

    public function editSave($noteid)
    {
        $data = array(
            'noteid' => $noteid,
            'title' => $_POST['title'],
            'content' => $_POST['content']
        );

        $this->model->editSave($data);
        header('location: ' . URL . 'note');
    }

    public function delete($id)
    {
        $this->model->delete($id);
        header('location: ' . URL . 'note');
    }
}
