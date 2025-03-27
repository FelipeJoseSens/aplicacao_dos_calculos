<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title ?? 'Central do Cálculo' }}</title>
    <style>
        body { font-family: Arial, sans-serif; max-width: 800px; margin: 0 auto; padding: 20px; }
        .card { background: #f8f9fa; border-radius: 8px; padding: 20px; margin: 20px 0; box-shadow: 0 2px 4px rgba(0,0,0,0.1); }
        .form-group { margin-bottom: 15px; }
        label { display: block; margin-bottom: 5px; }
        input { width: 100%; padding: 8px; border: 1px solid #ddd; border-radius: 4px; }
        button { background: #007bff; color: white; border: none; padding: 10px 20px; border-radius: 4px; cursor: pointer; }
        button:hover { background: #0056b3; }
        .result { font-size: 1.2em; margin: 20px 0; padding: 15px; background: #e9ecef; border-radius: 4px; }
    </style>
</head>
<body>
    <h1 style="color: #2c3e50; border-bottom: 2px solid #007bff; padding-bottom: 10px;">
        <a href="{{ route('home') }}" style="text-decoration: none; color: inherit;">Central do Cálculo</a>
    </h1>

    @yield('content')
</body>
</html>
