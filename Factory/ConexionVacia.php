<?php 

require_once './Factory/IConexion.php';


class ConexionVacia implements IConexion
{

    public function conectar()
    {
        echo 'No se especifico proveedor';
    }

    public function desconectar()
    {
        echo 'No se especifico proveedor';
    }
}