<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
{{-- Aquí irá el título de cada página--}}
<title>@yield('title')</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
</head>
<body>
{{-- Nuestro menú --}}
<nav class="navbar navbar-expand-lg bg-dark navbar-dark mb-4">
<div class="container-fluid">
<a class="navbar-brand" href="#">Dashboard</a>
<button class="navbar-toggler" type="button" data-bs-toggle="collapse"
data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" arialabel="Toggle navigation">
<span class="navbar-toggler-icon"></span>
</button>
<div class="collapse navbar-collapse" id="navbarNav">
<ul class="navbar-nav">
<li class="nav-item">
<a class="nav-link active" aria-current="page" href="/">Inicio</a>
</li>
<li class="nav-item">
<a class="nav-link" href="/products/show">Beneficiario</a>
</li>
</ul>
</div>
</div>
</nav>
<div class="container-fluid">
{{-- Aquí irá el contenido de todas las páginas --}}
@yield('content')
</div>
</body>
</html>

@yield('scripts')
