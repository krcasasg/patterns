<?php
include_once 'ObjectX.php';
class Singleton
{
    private function __construct()
    {
        echo 'Creando un nuevo objeto X en singleton.<br>';
    }

    public static function getInstance()
    {
        static $instance = null;

        if(null == $instance){
            $instance = new ObjectX();
        }else{
            echo 'El objeto ya existe, no puede ser creado nuevamente <br>';
        }

        return $instance;
    }
}
