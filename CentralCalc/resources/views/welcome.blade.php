@extends('layouts.app')

@section('content')
<div class="grid" style="display: grid; grid-template-columns: repeat(auto-fit, minmax(250px, 1fr)); gap: 20px;">
    <div class="card">
        <h2>Calculadora IMC</h2>
        <p>Calcule seu Índice de Massa Corporal</p>
        <a href="{{ route('form', 'imc') }}">
            <button>Acessar</button>
        </a>
    </div>

    <div class="card">
        <h2>Avaliação de Sono</h2>
        <p>Analise a qualidade do seu sono</p>
        <a href="{{ route('form', 'sono') }}">
            <button>Acessar</button>
        </a>
    </div>

    <div class="card">
        <h2>Cálculo de Viagem</h2>
        <p>Calcule o custo de combustível</p>
        <a href="{{ route('form', 'viagem') }}">
            <button>Acessar</button>
        </a>
    </div>
</div>
@endsection
