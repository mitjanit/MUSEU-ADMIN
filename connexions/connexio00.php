<?php
$local=0;
if($local==1){
	$con00 = mysqli_connect("localhost", "root", "iesmanacor2016", "intranet00");
}
else {
	$con00 = mysqli_connect("bbdd.iesmanacor.cat", "ddb16203", "cRzCyj2Gujh4", "ddb16203");
}

if (!$con00) {
    echo "Error: No s'ha pogut conectar amb MySQL." . PHP_EOL;
    echo "error de depuració: " . mysqli_connect_errno() . PHP_EOL;
    exit;
}

//echo "Éxito: S'ha establit connexió amb MySQL!" . "Informació del host: " . mysqli_get_host_info($connexio) . "<br/>";

?>