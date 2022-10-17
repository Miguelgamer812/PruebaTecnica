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
                    <a class="logo" href='/'>
                        <h1 class="logo__nombre no-margin centrar-texto">Prueba<span class="logo__bold">Técnica</span></h1>
                    </a>
                    <nav class="navegacion">
                        <a href='/Registrar' class="navegacion__enlace">Registro de Usuarios</a>
                        <a href='/Numeros' class="navegacion__enlace">Números</a>
                    </nav>
                </div>
            </div>
        </header>

        <div id="content">
        <h1>Registro de Usuarios</h1>
<form action="{{route('secundarios-update', ['id'=>$variable->id])}}" method="POST">
    @method('PUT')
    @csrf
        <table border="1">
                <tr>
                    <td><label>Nombres</label></td>
                    <td><input type="text" name="Nombre" placeholder="Nombres"  value="{{$variable->Nombre}}" required/></td>
                </tr>
                <tr>
                    <td><label>Apellidos</label></td>
                    <td><input type="text" name="Apellidosuser" placeholder="Apellidos"  value="{{$variable->Apellidos}}" required/></td>
                </tr>
                <tr>
                    <td><label>Cedula</label></td>
                    <td><input type="text" name="Cedulauser" placeholder="su cedula"  value="{{$variable->Cedula}}"required/></td>
                </tr>
                <tr>
                    <td><label>Fecha de nacimiento</label></td>
                    <td><input type="date" name="Fechauser" placeholder="2001-05-01" value="{{$variable->FechaNacimiento}}" required/></td>
                </tr>
                <tr>
                    <td><label>Contrase&ntilde;a</label></td>
                    <td><input type="password" name="pass" placeholder="**********************"  value="{{$variable->Contraseña}}" required/></td>
                </tr>
                <tr>
                    <td><label>Repetir Contrase&ntilde;a</label></td>
                    <td><input type="password" name="rpass" placeholder="**********************"  value="{{$variable->Contraseña}}" required/></td>
                </tr>
                <tr>
                    <td><label><input type="submit" value="Actualizar"></input></label></td>
                    <!-- <td><label><input type="reset" value="Reestablecer"></input></label></td> -->
                </tr>
        </form>
    </div>
<body>
@yield('content')
@yield('lista')
@yield('content2')
</body>
</html>