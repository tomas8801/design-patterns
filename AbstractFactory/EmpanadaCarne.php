<?php 
require_once './AbstractFactory/Empanada.php';

class EmpanadaCarne extends Empanada 
{
    public function empanadaCarne()
    {
        $this->description = 'Empanada de carne';
    }
}