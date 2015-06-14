<?php

/**
* Auth
*/
class Auth
{
    public static function handleLogin()
    {
        @session_start();
        $logged_in = $_SESSION['loggedIn'];
        if ($logged_in == false) {
            session_destroy();
            header('location:' . URL . 'login');
            exit;
        }
    }
}