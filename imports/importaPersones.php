<?php

require_once('../connexions/connexio01.php');

$mArray = explode("\r\n", $_POST['dades']);
echo "<p>".count($mArray)." persones a importar.</p>";
for($i=0; $i<count($mArray); $i++){
	echo "<p>LINEA ".$i.": ".$mArray[$i]."</p>";
	$mLine = explode(";", trim($mArray[$i]));
	$nome = $mLine[0];
	$ap1 = $mLine[1];
	$ap2 = $mLine[2];
	$nom = $mLine[3];
	$pais = $mLine[4];
	$provincia = $mLine[5];
	$poblacio = $mLine[6];
	$neix = $mLine[7];
	$mor = $mLine[8];
	$detalls = $mLine[9];
	
	echo "<p>".$nome." ".$ap1."." ".$ap2."." ".$nom." ".$pais." ".$provincia." ".$poblacio." ".$neix." ".$mor." ".$detalls."</p>";
	echo "<br/>";

	$sql ="INSERT INTO persones (nom_esportiu, nom, ap1, ap2, data_naixament, mort, mort_detall, poblacions_id, provincia_id, paisos_id) VALUES ('".$nome."', '".$nom."', '".$ap1."', '".$ap2."', '".$neix."', '".$mor."', '".$detalls."', '".$poblacio."', '".$provincia."', '".$pais."')";
	echo $sql."<br/>";
	mysqli_query($con01, $sql) or die(mysqli_error());
}


?>