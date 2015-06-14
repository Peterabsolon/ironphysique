<?php

/**
* Login_Model
*/
class Login_Model extends Model
{
    public function __construct()
    {
        parent::__construct();
    }

    public function run()
    {
        $q =   'SELECT      userid, 
                            role, 
                            firstname 
                FROM        user    
                WHERE login = :login 
                AND password = :password';

        $data = $this->db->select($q, array(
            ':login' => $_POST['login'],
            ':password' => Hash::create('sha256', $_POST['password'], HASH_PASSWORD_KEY)
        ));

        $count = count($data);

        $data = array_shift($data);

        if($count > 0) {
            Session::init();
            Session::set('role', $data['role']);
            Session::set('loggedIn', true);
            Session::set('userid', $data['userid']);
            Session::set('login', $_POST['login']);
            
            if(isset($data['firstname'])) {
                Session::set('firstname', $data['firstname']);
            }

            Session::set('login', $_POST['login']);
        }

        else {
            echo 'login failed';
            die;
            header('location: '. URL .'index');
        }
    }
}
