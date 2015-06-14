<?php

/**
* TODO: ACL : SecureContainer
*/
class SecureContainer
{
    protected $target = null;
    protected $acl = null;

    public function __construct($target, $acl)
    {
        $this->target = $target; // controller name
        $this->acl = $acl;
    }

    public function __call($method, $arguments)
    {
        if (method_exists($this->target, $method) && $this->acl->isAllowed(get_class($this->target), $method)) {
            return call_user_func_array(array($this->target, $method), $arguments);
        }
    }

    // // assuming that you have two objects already: $currentUser and $controller
    // $acl = new AccessControlList( $currentUser );

    // $controller = new SecureContainer( $controller, $acl );
    // // you can execute all the methods you had in previous controller
    // // only now they will be checked against ACL
    // $controller->actionIndex();
}

