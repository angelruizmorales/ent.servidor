<?php
$sem=array("lunes", "martes" ,"miércoles" ,"jueves", "viernes", "sábado", "domingo");

echo"<table border=2px bordercolor=red bgcolor=yellow aling=center>";

for($i=0;$i<count($sem);$i++){
    echo"<tr><td>$sem[$i]</td></tr>";
}
echo"<table border=2px bordercolor=red bgcolor=yellow aling=center>";
sort($sem);
for($i=0;$i<count($sem);$i++){
    echo"<tr><td>$sem[$i]</td></tr>";
}
?>
