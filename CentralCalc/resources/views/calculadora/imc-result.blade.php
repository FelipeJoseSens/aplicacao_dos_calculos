@extends('layouts.app', ['title' => 'Resultado IMC'])

@section('content')
<div class="card">
    <h2>Resultado do Cálculo de IMC</h2>

    <div class="result">
        <p><strong>Peso:</strong> {{ $inputs['weight'] }} kg</p>
        <p><strong>Altura:</strong> {{ $inputs['height'] }} cm</p>
        <hr>
        <p><strong>IMC Calculado:</strong> {{ $resultado['valor'] }}</p>
        <p><strong>Classificação:</strong> {{ $resultado['classificacao'] }}</p>
    </div>

    <a href="{{ route('home') }}">
        <button>Nova Consulta</button>
    </a>
</div>
@endsection
