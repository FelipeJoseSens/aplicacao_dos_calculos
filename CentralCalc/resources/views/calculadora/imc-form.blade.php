@extends('layouts.app', ['title' => 'Calculadora IMC'])

@section('content')
<div class="card">
    <h2>Calculadora IMC</h2>

    @if($errors->any())
        <div style="color: red; margin-bottom: 15px;">
            @foreach($errors->all() as $error)
                <p>{{ $error }}</p>
            @endforeach
        </div>
    @endif

    <form action="{{ route('calcular', $tipo) }}" method="POST">
        @csrf
        <div class="form-group">
            <label>Peso (kg):</label>
            <input type="number" name="weight" step="0.1" required>
        </div>

        <div class="form-group">
            <label>Altura (cm):</label>
            <input type="number" name="height" step="0.1" required>
        </div>

        <button type="submit">Calcular</button>
    </form>
</div>
@endsection
