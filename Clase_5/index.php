<?php
//CONEXION CON LA BASE DE DATOS
/*$conexionMySQL=mysqli_connect("127.0.0.1:3306","root","","telefonia");*/

//QUERY
/*$resultado=mysqli_query($conexionMySQL,"SELECT * FROM usuario;");*/

//MOSTRAMOS EL CONTENIDO QUE TIENE LA CONSULTA
//mysqli_fetch_assoc()=DEVUELVE UN ARRAY ASOCIATIVO DEL PRIMER REGISTRO
//print_r(mysqli_fetch_assoc($resultado));
/*echo "<br>";
while($unaFila=mysqli_fetch_assoc($resultado)){
    print_r($unaFila);
    echo "<br>";
}   
//INSERTAR
$resultado=mysqli_query($conexionMySQL,"INSERT INTO usuario (usuario,nombre,nivel) VALUES('CEVE05','CELESTE',3);");
if($resultado){
    echo "Esta consulta salio bien."."<br>";
}
else{
    echo "Esta consulta sali mal."."<br>";
}*/

//CERRAR CONEXION
/*mysqli_close($conexionMySQL);*/

//ARRAY
/*$miArray=[];
$miArray2=array();*/

/*$nombres=["Celeste Severich","Lautaro Martinez","Edin Dzeko"];
echo "<br>";
print_r($nombres);
array_push($nombres,"Karen Dominguez");//AGREGAMOS
echo "<br>";
print_r($nombres);*/
/*$nombres=3;
var_dump($nombres);*/
/*$Cele=$nombres[0];
echo "<br>";
print_r($Cele);
echo "<br>";*/
//RECORRER
/*echo "<br>";
echo "RECORRER CON FOREACH";
echo "<br>";
foreach($nombres as $nombre){
    print_r($nombre);
    echo "<br>";
}*/

//ARRAY ASOCIATIVOS
/*$miArrayAsoc=[
    "nombre"=>"Celeste",
    "apellido"=>"Severich",
    "edad"=>23
];
echo "<br>";
print_r($miArrayAsoc);
echo "<br>";
$miArrayAsoc["localidad"]="Atocha";//AGREGAMOS
print_r($miArrayAsoc);
echo "<br>";
print_r($miArrayAsoc["edad"]);
echo "<br>";
echo "RECORREMOS EL ARRAY ASOCIATIVO";
echo "<br>";*/
//RECORREMOS
/*foreach ($miArrayAsoc as $clave=>$valor){
    echo "Clave: ".$clave." Valor: ".$valor;
    echo "<br>";
}*/
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script type="text/javascript" src="js/function.js"></script>
    <title>Mi primer HTML</title>
</head>
<body>
    <h1 id="Titulo_1" class="H1_Rojo">Hola soy el H1_rojo</h1>
    <h1>Esto es otro H1</h1>
    <p class="H1_Rojo">Esto es un Parrafo loco</p>
    <h4 id="Titulo_2" class="H1_Rojo H1_Verde">Hola sopy un titulo h4</h4>
    <button onclick="mostrarSaludo();">CLICK</button>


    <div class="divFormulario">
        nombre: <input type="text" id="nombre" autocomplete="off">
        apellido: <input type="text" id="apellido" autocomplete="off">
        <button onclick="cargarPersona();">Guardar</button>
    </div>

    <table>
        <thead>
            <th>Nombre</th>
            <th>Apellido</th>
        </thead>
        <tbody id="bodyTablaPersonas">
            
        </tbody>
    </table>

    <div>
        <input id="contador" type="number" value="0" readonly>
        <button onclick="playContador();" id="play">Play</button>
        <button onclick="stopContador();" id="stop">Stop</button>
    </div>


</body>
</html>
<script>
    var arrayElementos = document.getElementsByTagName("p");
    for(i = 0; i < arrayElementos.length; i++) {
        arrayElementos[i].style.backgroundColor = "red";
    }

    //FUNCION ANONIMA
    var frutas=["banana","manzana","pera"];

    /*frutas.forEach(mostrarElementos(value,index){

    });

    frutas.mostrarElementos(function(value,index){
        console.log(value);
        console.log(index);
    });*/

    //OTRA MANERA

    frutas.forEach((value,index)=>{
        console.log(value);
        console.log(index);
    });


    function mostrarSaludo(){
        alert("Hola desde una function en el JS");
    }

</script>