@extends('app')

@section('content')
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/login.css') }}">
    <title>Registrar</title>
</head>

<body>
    <div id="content">
        <h1>Registro de Usuarios</h1>
        <form action="{{ route('secundarios') }}" method="POST">
            @csrf
            @if ('success')
                <h6 class="alert-success">{{ session('success') }}</h6>
            @endif
            @error('rpass')
                <h6 class="alert-danger">{{ $message }}</h6>
            @enderror
            <table border="1">
                <tr>
                    <td><label>Nombres</label></td>
                    <td><input type="text" name="Nombre" placeholder="Nombres" required /></td>
                </tr>
                <tr>
                    <td><label>Apellidos</label></td>
                    <td><input type="text" name="Apellidosuser" placeholder="Apellidos" required /></td>
                </tr>
                <tr>
                    <td><label>Cedula</label></td>
                    <td><input type="text" name="Cedulauser" placeholder="su cedula" required /></td>
                </tr>
                <tr>
                    <td><label>Fecha de nacimiento</label></td>
                    <td><input type="date" name="Fechauser" placeholder="2001-05-01" required /></td>
                </tr>
                <tr>
                    <td><label>Contrase&ntilde;a</label></td>
                    <td><input type="password" name="pass" placeholder="**********************" required /></td>
                </tr>
                <tr>
                    <td><label>Repetir Contrase&ntilde;a</label></td>
                    <td><input type="password" name="rpass" placeholder="**********************" required /></td>
                </tr>
                <tr>
                    <td><label><input type="submit" value="Registrar"></input></label></td>
                    <td><label><input type="reset" value="Reestablecer"></input></label></td>
                </tr>
        </form>
    </div>
</body>

</html>
@endsection
@section('footer')

<div class="footer">
    <div class="contenedor">
        <div class="barra">
            <a class="logo" href='/'>
                <h1 class="logo__nombre no-margin centrar-texto">Prueba<span class="logo__bold">Técnica</span></h1>
            </a>
            <nav class="navegacion">
                <a href='/Registrar' class="navegacion__enlace">Registro de Usuarios</a>
                <a href="{{route('Numeros')}}" class="navegacion__enlace">Números</a>
            </nav>
        </div>
</div>
@endsection

@section('lista')
<link rel="stylesheet" href="{{ asset('css/grid.css') }}">
    <div>
		@foreach ($variable as $secundario) <!-- Ese secundario es solo una variable para el for como si fuera el i que va hasta el punto length-->
            <div class="row mb-3 text-center">
                <div class="col-4 themed-grid-col"><a href=" {{ route('secundarios-edit', ['id' => $secundario->id]) }}" class="navegacion__enlace">{{$secundario->Nombre}}</a></div>
                <div class="col-4 themed-grid-col">{{$secundario->Apellidos}}</div> <!--Nombre de la base de datos-->
                <div class="col-4 themed-grid-col">{{$secundario->Cedula}}</div>
                <div class="col-4 themed-grid-col">{{$secundario->FechaNacimiento}}</div>
                <a href="{{ route('secundarios-edit',['id' =>$secundario->id]) }}">{{$secundario->Registrar}}</a>
                <div class="col-md-3 d-flex justify-content-end">
                    <form action="{{ route('secundarios-destroy',[$secundario->id])}}" method="POST">
                        @method('DELETE')
                        @csrf
                        <button class="btn btn-danger btn-sm">Eliminar</button>
                    </form> 
                </div>
                </div>
            </div>
        @endforeach
    </div>
@endsection
