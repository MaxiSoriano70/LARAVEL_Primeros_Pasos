<!DOCTYPE html>
<html lang="en">
<head>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{csrf_token()}}">
    <title>Ejemplo clase</title>
</head>
<body>
    

<h1>{{ $titulo }}</h1>
<form method="get" action="{{route('clientes.index')}}">
    <label>Razon Social:</label><input type="text" name="razon_social"><br>
    <label>CUIT:</label><input type="text" name="cuit"><br>
    <button type="submit">Filtar</button>
</form>
<table>
    <thead>
        <tr>
            <th>Razon Social</th>
            <th>CUIT</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($arrayClientes as $cliente)
            <tr>
                <td>{{$cliente->razon_social}}</td>
                <td>{{$cliente->cuit}}</td>
            </tr>
        @endforeach
    </tbody>
</table>
<a href="{{route('clientes.create')}}">Nuevo Cliente</a>
<form>
    <label>Razon Social</label>
    <input type="text" id="razon_social" name="razon_social">
    <label>Razon Social</label>
    <input type="text" id="cuit" name="cuit">
    <button id="submitCliente">Guardar Cliente</button>
</form>


</body>
<script type="text/javascript" src="{{asset('js/function.js')}}"></script>
</html>