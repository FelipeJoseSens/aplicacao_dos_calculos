<?php

namespace App\Models;

class CalculadoraIMC
{
    public static function calcular($peso, $altura)
    {
        $alturaMetros = $altura / 100;
        $imc = $peso / ($alturaMetros ** 2);

        $classificacao = match (true) {
            $imc < 18.5 => 'Abaixo do peso',
            $imc < 25 => 'Peso normal',
            $imc < 30 => 'Sobrepeso',
            default => 'Obesidade',
        };

        return [
            'valor' => round($imc, 2),
            'classificacao' => $classificacao,
        ];
    }
}
