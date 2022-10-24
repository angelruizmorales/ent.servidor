<?php
    $servername = "localhost";
    $database = "prueba";
    $username = "root";
    $password = "";
    $busqueda = $_GET["Busca1"];
    $conexion = mysqli_connect($servername, $username, $password, $database);
        if(!$conexion){
            die("Connection failed: " . mysqli_connect_error());
        }
    echo "Connected sucessfully" . "<br>";
    echo "<br><br><br><br><br>";
    $consulta = "SELECT * FROM productos where NOMBREARTICULO like '%$busqueda%'";
    $resultados = mysqli_query ($conexion,$consulta);
    while ($fila=mysqli_fetch_row($resultados)){
        //la condicion del while es q lo ejecute mientras haya informacion
        echo $fila [0] . " ";
        echo $fila [1] . " ";
        echo $fila [2] . " ";
        echo $fila [3] . " ";
        echo "<br>";
    }
?>