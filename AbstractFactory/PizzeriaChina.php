<?php 
require_once './AbstractFactory/Pizzeria.php';
require_once './AbstractFactory/PizzaSushi.php';
require_once './AbstractFactory/EmpanadaArroz.php';
class PizzeriaChina implements Pizzeria
{
    public function crearPizza() : Pizza
    {
        return new PizzaSushi();
    }

    public function crearEmpanada() : Empanada
    {
        return new EmpanadaArroz();
    }
}