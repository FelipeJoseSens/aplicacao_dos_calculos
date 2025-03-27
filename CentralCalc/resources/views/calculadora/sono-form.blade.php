@extends('layouts.app', ['title' => 'Avaliação de Sono'])

@section('content')
<div class="card">
    <h2>Avaliação de Qualidade do Sono</h2>

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
            <label>Horas de sono nas últimas 24h:</label>
            <input type="number" name="hours" step="0.1" required>
        </div>

        <button type="submit">Avaliar</button>
    </form>
</div>
@endsection
