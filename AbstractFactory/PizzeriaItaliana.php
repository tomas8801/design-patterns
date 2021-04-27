<?php 
require_once './AbstractFactory/Pizzeria.php';
require_once './AbstractFactory/PizzaNapolitana.php';
require_once './AbstractFactory/EmpanadaBolognesa.php';
class PizzeriaItaliana implements Pizzeria
{
    public function crearPizza() : Pizza
    {
        return new PizzaNapolitana();
    }

    public function crearEmpanada() : Empanada
    {
        return new EmpanadaBolognesa();
    }
}