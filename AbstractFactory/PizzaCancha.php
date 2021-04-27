<?php 
require_once './AbstractFactory/Pizza.php';

class PizzaCancha extends Pizza
{
    public function pizzaCancha()
    {
        $this->description = 'Pizza de cancha';
    }
}