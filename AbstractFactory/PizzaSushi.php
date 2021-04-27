<?php 
require_once './AbstractFactory/Pizza.php';

class PizzaSushi extends Pizza 
{
    public function pizzaSushi()
    {
        $this->description = 'Pizza Sushi';
    }
}