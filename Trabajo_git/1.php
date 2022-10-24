<?php
function incrementar($valor1){
    $valor1++;
    return $valor1;
}
$numero=5;
echo incrementar(5);
echo $numero;

function cambia_mayus($param){
    $param=strtolower($param);
    $param=ucwords($param);
    return $param;
}
$cadena="HOlA MundO";
echo cambia_mayus($cadena)."<br>";
echo $cadena;
?>