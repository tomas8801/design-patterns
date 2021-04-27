<?php 

require_once './AbstractFactory/Empanada.php';

class EmpanadaBolognesa extends Empanada
{
    public function empanadaBolognesa()
    {
        $this->description = 'Empanada Bolognesa';
    }
}