<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome</title>
</head>
<body>
    <?php
        echo "<h1>Hola Cele</h1>";
    ?>
    <form method="get" action="prueba_formulario.php">
        <label>Nombre: </label><input type="text" name="nombre" autocomplete="off"><br>
        <label>Apellido: </label><input type="text" name="apellido" autocomplete="off"><br>
        <label>Email: </label><input type="text" name="email" autocomplete="off"><br>
        <button type="submit">Enviar</button>
    </form>
    <?php
        if(isset($_GET["nombre"])){
            echo $_GET["nombre"]." ".$_GET["apellido"]."<br>";
            echo $_GET["email"];
        }
    ?>
    <form method="post" action="prueba_formulario.php">
        <label>Nombre: </label><input type="text" name="nombre" autocomplete="off"><br>
        <label>Apellido: </label><input type="text" name="apellido" autocomplete="off"><br>
        <label>Email: </label><input type="text" name="email" autocomplete="off"><br>
        <button type="submit">Enviar</button>
    </form>
    <!--<label>Nombre2: </label><input type="text" name="nombre2" autocomplete="off"><br>-->
</body>
</html>
