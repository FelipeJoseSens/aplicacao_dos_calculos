@extends('layouts.app', ['title' => 'Resultado Cálculo de Viagem'])

@section('content')
<div class="card">
    <h2>Resultado do Cálculo de Viagem</h2>

    <div class="result">
        <p><strong>Distância:</strong> {{ $inputs['distance'] }} km</p>
        <p><strong>Consumo:</strong> {{ $inputs['consumption'] }} km/l</p>
        <p><strong>Preço do combustível:</strong> R$ {{ number_format($inputs['price'], 2, ',', '.') }}</p>
        <hr>
        <p><strong>Custo total estimado:</strong> R$ {{ number_format($resultado, 2, ',', '.') }}</p>
    </div>

    <a href="{{ route('home') }}">
        <button>Novo Cálculo</button>
    </a>
</div>
@endsection
