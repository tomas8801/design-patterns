<?php 

class Singleton 
{

    private static $instance;

    private function __construct()
    {
    }

    public static function getInstance() {
        if(!self::$instance) {
            self::$instance = new Singleton();
        }
        
        return self::$instance;
    }

    public function singletonMethod(): String {
        return 'Metodo de la clase singleton';
    }


}