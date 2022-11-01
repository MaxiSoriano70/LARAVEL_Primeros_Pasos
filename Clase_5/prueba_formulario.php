<?php
        if(isset($_GET["nombre"])){
            echo $_GET["nombre"]." ".$_GET["apellido"]."<br>";
            echo $_GET["email"];
        }
?>
<?php
        if(isset($_POST["nombre"])){
            echo $_POST["nombre"]." ".$_POST["apellido"]."<br>";
            echo $_POST["email"];
        }
?>