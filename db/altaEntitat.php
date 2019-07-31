<?php include("../common/mysessions.php"); ?>
<?php require_once('../connexions/connexio01.php'); ?>
<?php 


//$id = (addslashes($_REQUEST['id']));
$nome = addslashes($_REQUEST['nome']);
$nom = addslashes($_REQUEST['nom']);
$poble = $_REQUEST['poblacio'];
$provincia = $_REQUEST['provincia'];
$pais = $_REQUEST['pais'];
$inici = (addslashes($_REQUEST['inici']));
$detallsinici = (addslashes($_REQUEST['detalls']));

$escut = $_REQUEST['escut'];
$himne = $_REQUEST['himne'];
$insignia = $_REQUEST['insignia'];
$cd = $_REQUEST['cd'];
$camiseta = $_REQUEST['camiseta'];
$bufanda = $_REQUEST['bufanda'];
$bandera = $_REQUEST['bandera'];
$altre = (addslashes($_REQUEST['altre']));
$detalls2 = (addslashes($_REQUEST['detalls2']));

$sql ="INSERT INTO clubs (nom, poblacions_id, pais_id, provincia_id, inici, inici_detall, nom_esportiu, escut, himne, cd, insignia, camiseta, bufanda, bandera, altre, detalls2) VALUES ('".$nom."', '".$poble."', '".$pais."', '".$provincia."', '".$inici."', '".$detallsinici."', '".$nome."', '".$escut."', '".$himne."', '".$cd."', '".$insignia."', '".$camiseta."', '".$bufanda."', '".$bandera."', '".$altre."', '".$detalls2."')";
echo $sql."<br/>";
mysqli_query($con01, $sql) or die(mysqli_error());


// LOGs
$user = $_SESSION['username'];
$table = "Entitat";
$sqlLog = "INSERT INTO accions_user (user, tipus, taula, temps) VALUES ('".$user."','I','".$table."', CURRENT_TIMESTAMP)";
echo $sqlLog."<br/>";
mysqli_query($con01, $sqlLog) or die(mysqli_error());

header("Location: ../entitats.php?msgOk",TRUE, 302);
exit;

?>