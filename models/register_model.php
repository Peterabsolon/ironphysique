<?php

/**
* Register_Model
*/
class Register_Model extends Model
{
    public function __construct()
    {
        parent::__construct();
    }

    public function run() {
        $defaultRole = 'default';

        // queries the db for taken usernames
        $takenLogin = $this->db->select('SELECT login FROM user WHERE login = :login', array(
            ':login' => $_POST['login']
        )); 

        $count = count($takenLogin);

        if($count == '0') {
            try {
                $form = new Form();

                $form   ->post('login')
                        ->val('email')
                        ->post('password')
                        ->match($_POST["password"], $_POST["confirmation"], "Passwords don't match")
                        ->post('role', $defaultRole)
                        ->submit();

                $data = $form->fetch();           

                $this->db->insert('user', $data);    

                $userid = $this->db->select('SELECT userid FROM user WHERE login = :login', array(
                    ':login' => $data['login']
                ));

                Session::init();
                Session::set('role', $defaultRole);
                Session::set('loggedIn', true);
                Session::set('userid', $userid);
                Session::set('login', $data['login']);

                return false;
            }

            catch (Exception $e) {
                
                $message = $e->getMessage();
                Session::set('message', $message);
                header('Location:' . URL . 'register');

                // $file = URL_PUBLIC . '/people.txt';
                // // Open the file to get existing content
                // $current = file_get_contents($file);
                // // Append a new person to the file
                // $current .= $e->getMessage(); . "\n";
                // // Write the contents back to the file
                // file_put_contents($file, $current);
            }   
        } 

        else {
            Session::set('message', 'Username taken');
        }
    }
}