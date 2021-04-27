<?php 


class ConexionFabrica {

    public function getConexion(String $motor)
    {
        if($motor == NULL) return new ConexionVacia();
        if($motor == 'MYSQL') return new ConexionMySQL();
        if($motor == 'ORACLE') return new ConexionOracle();
        if($motor == 'POSTGRE') return new ConexionPostgreSQL();
        if($motor == 'SQL') return new ConexionSQLServer();

        return new ConexionVacia();

    }
}