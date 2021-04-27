<?php 

require_once './AbstractFactory/Empanada.php';

class EmpanadaArroz extends Empanada 
{
    public function empanadaArroz()
    {
        $this->description = 'Empanada de arroz';
    }
}