<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Prueba Técnica</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.min.js" integrity="sha384-IDwe1+LCz02ROU9k972gdyvl+AESN10+x7tBKgc9I5HFtuNz0wWnPclzo6p9vxnk" crossorigin="anonymous"></script>
</head>
<header class="header">
            <div class="contenedor">
                <div class="barra">
                    <a class="logo" href='/index'>
                        <h1 class="logo__nombre no-margin centrar-texto">Prueba<span class="logo__bold">Técnica</span></h1>
                    </a>
                    <nav class="navegacion">
                        <a href='/Registrar' class="navegacion__enlace">Registro de Usuarios</a>
                        <a href='/Numeros' class="navegacion__enlace">Números</a>
                        <a href="{{route('login')}}" class="navegacion__enlace">Login</a>
                        <a href="{{route('register')}}" class="navegacion__enlace">Register</a>
                    </nav>
                </div>
            </div>
        </header>
<body>
@yield('content')
@yield('lista')
@yield('content2')
</body>
</html>