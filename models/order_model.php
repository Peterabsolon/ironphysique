<?php

/**
* Order_Model
*/
class Order_Model extends Model
{
    public function __construct()
    {
        parent::__construct();
    }

    public function place($data)
    {
        $this->db->insert('orders', array(
            'userid' => $_SESSION['userid'],
            'item' => $data['item'],
            'name' => $data['name'],
            'phoneNum' => $data['phoneNum'],
            'email' => $data['email'],
            'address' => $data['address'],
            'note' => $data['note'],
            'date_added' => date('Y-m-d H:i:s')
        ));
    }
}