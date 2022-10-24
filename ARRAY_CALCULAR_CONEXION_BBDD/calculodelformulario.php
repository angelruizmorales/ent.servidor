<html>
    <style>
        *{
            color:red;
            font-size:14px;
        }
    </style>
</html>
<?php
$P = $_GET['P'];
$S = $_GET['S'];
$O = $_GET['operador'];


if($O == "+"){
    $solucion = $P + $S;
    echo "El resultado es:".$solucion;
}else
if($O == "-"){
    $solucion = $P - $S;
    echo "El resultado  es:".$solucion;
}else
if($O == "*"){
    $solucion = $P * $S;
    echo "El resultado es:".$solucion;
}else
if($O == "/"){
    $solucion = $P / $S;
    echo "El resultado  es:".$solucion;
}else
if($O == "%"){
    $solucion = $P % $S;
    echo "El resultado es:".$solucion;
}
?>