<h1>{{$titulo}}</h1>
<form method="post" action="{{route('clientes.store')}}">
    @csrf
    <label>Razon Social:</label><input type="text" name="razon_social"><br>
    <label>CUIT:</label><input type="text" name="cuit"><br>
    <button type="submit">Agregar</button>
</form>