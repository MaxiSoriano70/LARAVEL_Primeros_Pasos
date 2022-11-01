<?php
$conexionMySQL=mysqli_connect("127.0.0.1:3306","root","","telefonia");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabla</title>
</head>
<style><?php include 'css/tabla.css'; ?></style>
<body>
    <h1>USUARIOS</h1>
    <div class="contenedortabla">
    <table>
        <thead>
            <th>USUARIO</th>
            <th>NOMBRE</th>
            <th>NIVEL</th>
            <th>EMAIL</th>
            <th>TELEFONO</th>
            <th>MARCA</th>
            <th>COMAPAÑIA</th>
            <th>SALDO</th>
            <th>ACTIVO</th>
            <th>FECHA DE NACIMIENTO</th>
        </thead>
        <?php
            $resultado=mysqli_query($conexionMySQL,"SELECT usuario,nombre,nivel,email,telefono,marca,compania,saldo,activo,fechaNacimiento FROM telefonia.usuario;");
            while($mostrar=mysqli_fetch_array($resultado)){
        ?>
        <tr>
            <td><?php echo $mostrar['usuario'] ?></td>
            <td><?php echo $mostrar['nombre'] ?></td>
            <td><?php echo $mostrar['nivel'] ?></td>
            <td><?php echo $mostrar['email'] ?></td>
            <td><?php echo $mostrar['telefono'] ?></td>
            <td><?php echo $mostrar['marca'] ?></td>
            <td><?php echo $mostrar['compania'] ?></td>
            <td><?php echo $mostrar['saldo'] ?></td>
            <td><?php echo $mostrar['activo'] ?></td>
            <td><?php echo $mostrar['fechaNacimiento'] ?></td>
        </tr>
        <?php
        }
        ?>
    </table>
    </div>
</body>
</html>