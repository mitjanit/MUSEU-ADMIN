<?php
$local=1;
if($local==1){
		$connexio = mysqli_connect("localhost", "root", "mitjanit3", "museu");
}
	else {
	$connexio = mysqli_connect("bbdd.iesmanacor.cat", "ddb94869", "S4K3GqtTrYE7", "ddb94869");
}

if (!$connexio) {
    echo "Error: No s'ha pogut conectar amb MySQL." . PHP_EOL;
    echo "error de depuració: " . mysqli_connect_errno() . PHP_EOL;
    exit;
}

//echo "Éxito: S'ha establit connexió amb MySQL!" . "Informació del host: " . mysqli_get_host_info($connexio) . "<br/>";

?>