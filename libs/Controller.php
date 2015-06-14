<?php

/**
* Controller
*/
class Controller
{
    function __construct() {
        $this->view = new View();
    }

    /**
    * @param string $name Name of the model
    * @param string $modelPath Location of the model
    */
    public function loadModel($name, $modelPath = 'models/') {
        $path = $modelPath . $name . '_model.php';

        if(file_exists($path)) {
            require $path;

            $modelName = $name . '_Model';
            $this->model = new $modelName;
        }        
    }
}

