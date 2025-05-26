<!DOCTYPE html>
<html>
<head>
    <title>{{ $capital->nombre }}</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container-fluid">
        <a class="navbar-brand" href="{{ route('capitales.index') }}">Capitales del Mundo</a>
    </div>
</nav>

<div class="container mt-5">
    <div class="card shadow">
        <img src="{{ $capital->imagen }}" class="card-img-top" style="height: 300px; object-fit: cover;">
        <div class="card-body">
            <h3 class="card-title text-center">{{ $capital->nombre }} ({{ $capital->pais }})</h3>
            <div class="row mt-4">
                <div class="col-md-6">
                    <ul class="list-group">
                        <li class="list-group-item"><strong>Continente:</strong> {{ $capital->continente }}</li>
                        <li class="list-group-item"><strong>Población:</strong> {{ number_format($capital->poblacion) }}</li>
                        <li class="list-group-item"><strong>Altitud:</strong> {{ $capital->altitud }} msnm</li>
                    </ul>
                </div>
                <div class="col-md-6">
                    <ul class="list-group">
                        <li class="list-group-item"><strong>Latitud:</strong> {{ $capital->latitud }}</li>
                        <li class="list-group-item"><strong>Longitud:</strong> {{ $capital->longitud }}</li>
                    </ul>
                </div>
            </div>
            <div class="text-center mt-4">
                <a href="{{ route('capitales.index') }}" class="btn btn-secondary">← Volver a la lista</a>
            </div>
        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
