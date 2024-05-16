<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ config('app.name', 'Laravel') }}</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
@include('navbar')

<div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-inner">
        
        <!-- @foreach($produtos as $index => $produto) -->
            <div class="carousel-item {{ $index == 0 ? 'active' : '' }}">
                <div class="card" style="width: 18rem;">
                    <img src="{{ asset('images/' . $produto['imagem']) }}" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">nome_produto</h5>
                        <p class="card-text">descricao</p>
                        <p class="card-text">preco</p>
                    </div>
                </div>
            </div>
        <!-- @endforeach -->
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
    </button>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-DZpOj3mp3Kq78TV2j46j5fRMwPyHN+i1+j6czT5FgejDZcIeh+s/aT/q8Ft5vpsJ" crossorigin="anonymous"></script>
</body>
</html>
