<!DOCTYPE html>
<html>
<head>
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container-fluid">
        <a class="navbar-brand" href="#"> Capitales del Mundo</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navMenu">
            <span class="navbar-toggler-icon"></span>
        </button>
    </div>
</nav>

<div class="container mt-4">

    <!-- Formulario de Búsqueda -->
    <form method="GET" action="{{ route('capitales.index') }}" class="row mb-4">
        <div class="col-md-10">
            <input type="text" name="buscar" class="form-control" placeholder="Buscar por capital o país..." value="{{ request('buscar') }}">
        </div>
        <div class="col-md-2">
            <button type="submit" class="btn btn-primary w-100">Buscar</button>
        </div>
    </form>

    @if($capitales->count() > 0)
        <!-- Slider destacado -->
        <div id="capitalesCarousel" class="carousel slide mb-5" data-bs-ride="carousel">
            <div class="carousel-inner">
                @foreach($capitales->take(3) as $key => $capital)
                    <div class="carousel-item {{ $key == 0 ? 'active' : '' }}">
                        <img src="{{ $capital->imagen }}" class="d-block w-100" height="400" style="object-fit: cover;">
                        
                    </div>
                @endforeach
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#capitalesCarousel" data-bs-slide="prev">
                <span class="carousel-control-prev-icon"></span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#capitalesCarousel" data-bs-slide="next">
                <span class="carousel-control-next-icon"></span>
            </button>
        </div>

        <!-- Lista de capitales -->
        <h2 class="text-center mb-4">Lista de Capitales</h2>
        <div class="row">
            @foreach($capitales as $capital)
                <div class="col-md-4 mb-4">
                    <div class="card h-100 shadow-sm">
                        <img src="{{ $capital->imagen }}" class="card-img-top" style="height: 200px; object-fit: cover;">
                        <div class="card-body">
                            <h5 class="card-title">{{ $capital->nombre }}</h5>
                            <p class="card-text"><strong>País:</strong> {{ $capital->pais }}</p>
                            <a href="{{ route('capitales.show', $capital->id) }}" class="btn btn-primary w-100">Ver detalles</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    @else
        <div class="alert alert-warning text-center">
            No se encontraron capitales con ese criterio de búsqueda.
        </div>
    @endif

</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
