<?php
$valor =$_POST['dec'];
$resto = 0 ;
$i=1;
$binario=0;

if($valor == 0){
echo '0';
}
while($valor > 0){
$resto = $valor % 2;
$valor = floor($valor / 2);
$binario = $binario + ($resto*$i);
$i=$i*10;
}
echo "<h1>Em binário é:</h1><br><br>";
echo "<h2>$binario</h2>";
?>