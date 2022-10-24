<?php
class Coche{
    public $color;
    public $motor=1600;
    function Coche(){
        $ruedas=4;
        $color="";
        $motor=1600;
    }
    function arrancar(){
        echo"Estoy arrancanco<br>";
    }
    function girar(){
        echo"Estoy girando<br>";
    }
    function frenar(){
        echo"Estoy frenando<br>";
    }
}
$renault=new Coche();
$mazda=new Coche();
$seat=new Coche();


$seat->arrancar();
$seat->girar();
$seat->frenar();

$seat->ruedas;
$seat->motor;
$seat->$ruedas=6;
echo $seat->ruedas;
?>