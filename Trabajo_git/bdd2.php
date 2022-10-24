<?php

    require("bbd1.php");

    $conexion = mysqli_connect($Servername, $username, $password, $database);

        if($conexion){
            die("connection failed: " . mysqli_connect_error());
        }

    echo "connected successfully" . "<br>";
    echo "<br><br><br>";

    $consulta="select * from productos";
    $resultados=mysqli_query($conexion,$consulta);

    while($fila=mysqli_fetch_row($resultado)){
        echo $fila[0]." ";
        echo $fila[1]." ";
        echo $fila[2]." ";
        echo $fila[3]." ";
        echo "<br>";
        
    }

    mysqli_close($conexion);



?>