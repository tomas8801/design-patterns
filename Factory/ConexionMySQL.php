<?php 

require_once './Factory/IConexion.php';


class ConexionMySQL implements IConexion
{
    private String $host;
    private String $puerto;
    private String $usuario;
    private String $contraseña;

    public function __construct()
    {
        $this->host = 'localhost';
        $this->puerto = '8080';
        $this->usuario = 'admin';
        $this->contraseña = 'root';
    }

    public function conectar()
    {
        echo 'Se conecto a MySQL';
    }

    public function desconectar()
    {
        echo 'Se desconecto de MySQL';
    }
}