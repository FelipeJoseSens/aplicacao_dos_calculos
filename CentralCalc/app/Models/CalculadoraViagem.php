<?php

namespace App\Models;

class CalculadoraViagem
{
    public static function calcularCusto($distancia, $consumo, $precoCombustivel)
    {
        $litrosNecessarios = $distancia / $consumo;
        return round($litrosNecessarios * $precoCombustivel, 2);
    }
}
