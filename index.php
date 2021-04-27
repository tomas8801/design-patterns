<?php 


require_once './Singleton/Singleton.php';
require_once './Factory/ConexionFabrica.php';
require_once './Factory/ConexionMySQL.php';
require_once './Factory/ConexionOracle.php';
require_once './Factory/ConexionPostgreSQL.php';
require_once './Factory/ConexionSQLServer.php';
require_once './Factory/ConexionVacia.php';
require_once './AbstractFactory/PizzeriaArgentina.php';
require_once './AbstractFactory/PizzeriaItaliana.php';
require_once './AbstractFactory/PizzeriaChina.php';

// SINGLETON
$singleton = Singleton::getInstance();
echo $singleton->singletonMethod();

echo '<hr>';

// FACTORY
$fabrica = new ConexionFabrica();
$cx1 = $fabrica->getConexion('ORACLE');
echo $cx1->conectar();
echo '<br>';
$cx2 = $fabrica->getConexion('MYSQL');
echo $cx2->conectar();
echo '<br>';
$cx3 = $fabrica->getConexion('MONGO');
echo $cx3->conectar();

// ABSTRACT FACTORY
echo '<hr>';
$pizzeriaArgentina = new PizzeriaArgentina();
$pizza = $pizzeriaArgentina->crearPizza();
$empanada = $pizzeriaArgentina->crearEmpanada();
echo "Pizza: {$pizza->getDescription()} | Empanada: {$empanada->getDescription()}";
echo '<br>';

$pizzeriaItaliana = new PizzeriaItaliana();
$pizza = $pizzeriaItaliana->crearPizza();
$empanada = $pizzeriaItaliana->crearEmpanada();
echo "Pizza: {$pizza->getDescription()} | Empanada: {$empanada->getDescription()}";
echo '<br>';

$pizzeriaChina = new PizzeriaChina();
$pizza = $pizzeriaChina->crearPizza();
$empanada = $pizzeriaChina->crearEmpanada();
echo "Pizza: {$pizza->getDescription()} | Empanada: {$empanada->getDescription()}";

