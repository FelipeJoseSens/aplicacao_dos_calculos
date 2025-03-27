<?php

namespace App\Models;

class AnaliseSono
{
    public static function avaliar($horas)
    {
        return match (true) {
            $horas >= 7 && $horas <= 9 => 'Bom',
            $horas >= 5 && $horas < 7 => 'Médio',
            default => 'Ruim'
        };
    }
}
