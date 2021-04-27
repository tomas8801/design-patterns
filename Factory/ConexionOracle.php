<?php 

require_once './Factory/IConexion.php';

class ConexionOracle implements IConexion
{
    private String $host;
    private String $puerto;
    private String $usuario;
    private String $contraseña;

    public function __construct()
    {
        $this->host = 'localhost';
        $this->puerto = '2424';
        $this->usuario = 'admin';
        $this->contraseña = '';
    }

    public function conectar()
    {
        echo 'Se conecto a Oracle';
    }

    public function desconectar()
    {
        echo 'Se desconecto de Oracle';
    }
}