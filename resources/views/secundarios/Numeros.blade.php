@extends('app')

@section('content2')
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/login.css') }}">
    <title>Ingresar Números</title>
</head>

<body>
    <div id="content2">
        <h1>Ingreso de Números</h1>
        <form action="{{ route('secundarios') }}" method="POST">
            @csrf
            <table border="1">
                <tr>
                    <td><label>Ingrese los 5 números separados por coma</label></td>
                    <td><input type="number" name="Numeros" placeholder="num1,num2,num3,num4,num5" required /></td>
                </tr>
                <tr>
                    <td><label><input type="submit" value="Ingresar"></input></label></td>
                </tr>
        </form>
    </div>
</body>
@endsection