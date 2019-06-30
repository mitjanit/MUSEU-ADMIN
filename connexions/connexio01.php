<?php
$local=true;
if($local){
	$con01 = mysqli_connect("localhost", "root", "mitjanit3", "museu");
}
else {
	$con01 = mysqli_connect("bbdd.iesmanacor.cat", "ddb44764", "IESNaCamella123", "ddb44764");
}

if (!$con01) {
    echo "Error: No s'ha pogut conectar amb MySQL." . PHP_EOL;
    echo "error de depuració: " . mysqli_connect_errno() . PHP_EOL;
    exit;
}

//echo "Éxito: S'ha establit connexió amb MySQL!" . "Informació del host: " . mysqli_get_host_info($connexio) . "<br/>";

?>