<?php

$var;

$usuario=array("Nombre"=> "Eduardo",
                "Apellido" => "García",
                "Teléfono" => "111111111",
                "Contraseña" => "1234",
                "Email" => "eduardo@gmail.com");    

echo"<table border='1' bordercolor='red' bgcolor='yellow' align='center'>";

foreach($usuario as $datos => $valores){

echo "<tr><td>$datos: $valores</td></tr>";

}

echo '</table>';

?>
