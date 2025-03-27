@extends('layouts.app', ['title' => 'Cálculo de Viagem'])

@section('content')
<div class="card">
    <h2>Calculadora de Custo de Viagem</h2>

    @if($errors->any())
        <div style="color: red; margin-bottom: 15px;">
            @foreach($errors->all() as $error)
                <p>{{ $error }}</p>
            @endforeach
        </div>
    @endif

    <form action="{{ route('calculate', $tipo) }}" method="POST">
        @csrf
        <div class="form-group">
            <label>Distância total (km):</label>
            <input type="number" name="distance" required>
        </div>

        <div class="form-group">
            <label>Consumo do veículo (km/l):</label>
            <input type="number" name="consumption" step="0.1" required>
        </div>

        <div class="form-group">
            <label>Preço do combustível (por litro):</label>
            <input type="number" name="price" step="0.01" required>
        </div>

        <button type="submit">Calcular</button>
    </form>
</div>
@endsection
