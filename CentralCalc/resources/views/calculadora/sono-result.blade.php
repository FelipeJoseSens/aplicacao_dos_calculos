@extends('layouts.app', ['title' => 'Resultado Avaliação de Sono'])

@section('content')
<div class="card">
    <h2>Resultado da Avaliação de Sono</h2>

    <div class="result">
        <p><strong>Horas de sono:</strong> {{ $inputs['hours'] }} horas</p>
        <hr>
        <p><strong>Avaliação:</strong> {{ $resultado }}</p>
    </div>

    <a href="{{ route('home') }}">
        <button>Nova Avaliação</button>
    </a>
</div>
@endsection
