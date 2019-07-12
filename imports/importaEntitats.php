<?php

require_once('../connexions/connexio01.php');

$mArray = explode("\r\n", $_POST['dades']);
echo "<p>".count($mArray)." entitats a importar.</p>";
for($i=0; $i<count($mArray); $i++){
	echo "<p>LINEA ".$i.": ".$mArray[$i]."</p>";
	$mLine = explode(";", trim($mArray[$i]));
	$nome = $mLine[0];
	$nom = $mLine[1];
	$pais = $mLine[2];
	$provincia = $mLine[3];
	$poblacio = $mLine[4];
	$any = $mLine[5];
	$detalls = $mLine[6];
	
	echo "<p>".$nome." ".$nom." ".$pais." ".$provincia." ".$poblacio." ".$any." ".$detalls."</p>";
	echo "<br/>";

	$sql ="INSERT INTO clubs (nom, poblacions_id, pais_id, provincia_id, inici, inici_detall, nom_esportiu) VALUES ('".$nom."', '".$poblacio."', '".$pais."', '".$provincia."', '".$any."', '".$detalls."', '".$nome."')";
	echo $sql."<br/>";
	mysqli_query($con01, $sql) or die(mysqli_error());
}


?>