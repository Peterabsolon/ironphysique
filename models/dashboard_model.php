<?php

/**
* Dashboard_Model
*/
class Dashboard_Model extends Model
{
    public function __construct()
    {
        parent::__construct();
    }

    function xhrInsert()
    {
        $text = $_POST['text'];

        $this->db->insert('data', array('text' => $text));

        $data = array('text' => $text, 'id' => $this->db->lastInsertId());
        echo json_encode($data);
    }

    function xhrGetListings()
    {
        $data = $this->db->select('SELECT * FROM data');
        echo json_encode($data);
    }

    function xhrDeleteListing()
    {
        $id = (int) $_POST['id'];
        $this->db->delete('data', "id = '$id'");
    }

    public function userSingleList($userid)
    {
        // return $this->db->select(
        //     'SELECT * 
        //     FROM    user 
        //     WHERE   userid = :userid', 
        // array(':userid' => $userid));

        return array_shift($this->db->select('SELECT * FROM user WHERE userid = :userid', array(':userid' => $userid)));
    }

    function change_save($id) {
        try {
            $form = new Form();

            // login *

            // billing_name VARCHAR 25 * 
            // billing_surname VARCHAR 25 *
            // billing_company VARCHAR 25
            // billing_address VARCHAR 25 *
            // billing_zip INT 5 *
            // billing_city VARCHAR 50 *
            // billing_country VARCHAR 50 *
            // phonenum VARCAR 25 *   
            // ico INT 8     
            // dic INT 10
            // icdph VARCHAR 12

            // shipping_name VARCHAR 25 *
            // shipping_surname VARCHAR 25 *
            // shipping_company VARCHAR 25 
            // shipping_address VARCHAR 25 *
            // shipping_zip INT 5 *
            // shipping_city VARCHAR 50 *
            // shipping_country VARCHAR 50 *            

            $form   ->post('billing_name')
                    ->post('billing_surname')
                    ->post('billing_company')
                    ->post('billing_address')
                    ->post('billing_zip')
                    ->post('billing_city')
                    ->post('billing_country')
                    ->post('phonenum')
                    ->post('ico')
                    ->post('dic')
                    ->post('icdph');

            $form   ->submit();

            $data = $form->fetch();

            print_r($data);

            // $this->db->insert('user', array(
            //     'login' => $data['login'],
            //     'password' => Hash::create('sha256', $data['password'], HASH_PASSWORD_KEY),
            //     'role' => $defaultRole,
            //     'shippingdata' => 0
            // ));    

            return 0;
        }

        catch (Exception $e) {
            
            echo $e->getMessage();

            // $file = URL_PUBLIC . '/people.txt';
            // // Open the file to get existing content
            // $current = file_get_contents($file);
            // // Append a new person to the file
            // $current .= $e->getMessage(); . "\n";
            // // Write the contents back to the file
            // file_put_contents($file, $current);
        }    
    }
}