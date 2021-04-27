<?php 
require_once './AbstractFactory/Pizzeria.php';
require_once './AbstractFactory/PizzaCancha.php';
require_once './AbstractFactory/EmpanadaCarne.php';
class PizzeriaArgentina implements Pizzeria
{
    public function crearPizza() : Pizza
    {
        return new PizzaCancha();
    }

    public function crearEmpanada() : Empanada
    {
        return new EmpanadaCarne();
    }
}