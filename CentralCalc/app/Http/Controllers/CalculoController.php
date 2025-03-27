<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CalculadoraIMC;
use App\Models\AnaliseSono;
use App\Models\CalculadoraViagem;

class CalculoController extends Controller
{
    public function index()
    {
        return view('welcome');
    }

    public function exibirFormulario($tipo)
    {
        $tiposValidos = ['imc', 'sono', 'viagem'];

        if (!in_array($tipo, $tiposValidos)) {
            abort(404);
        }

        return view("calculadora.{$tipo}-form", compact('tipo'));
    }

    public function calcular(Request $request, $tipo)
    {
        $inputsValidados = [];

        switch ($tipo) {
            case 'imc':
                $inputsValidados = $request->validate([
                    'weight' => 'required|numeric|min:1',
                    'height' => 'required|numeric|min:1'
                ]);
                $resultado = CalculadoraIMC::calcular($inputsValidados['weight'], $inputsValidados['height']);
                break;

            case 'sono':
                $inputsValidados = $request->validate([
                    'hours' => 'required|numeric|min:0'
                ]);
                $resultado = AnaliseSono::avaliar($inputsValidados['hours']);
                break;

            case 'viagem':
                $inputsValidados = $request->validate([
                    'distance' => 'required|numeric|min:1',
                    'consumption' => 'required|numeric|min:1',
                    'price' => 'required|numeric|min:0.1'
                ]);
                $resultado = CalculadoraViagem::calcularCusto(
                    $inputsValidados['distance'],
                    $inputsValidados['consumption'],
                    $inputsValidados['price']
                );
                break;

            default:
                abort(404);
        }

        return view("calculadora.{$tipo}-result", [
            'resultado' => $resultado, // Corrected to match the view's variable name
            'inputs' => $inputsValidados,
            'tipo' => $tipo // Pass the $tipo variable to the view
        ]);
    }
}
