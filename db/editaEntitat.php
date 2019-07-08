<?php include("../common/mysessions.php"); ?>
<?php require_once('../connexions/connexio01.php'); ?>
<?php 


$id = $_REQUEST['id'];
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

$sql ="UPDATE clubs SET nom =  '".$nom."', nom_esportiu = '".$nome."', inici = '".$inici."', inici_detall = '".$detallsinici."', escut = '".$escut."', himne = '".$himne."', cd = '".$cd."', insignia =  '".$insignia."', camiseta = '".$camiseta."', bufanda = '".$bufanda."', bandera = '".$bandera."', altre =  '".$altre."', detalls2 = '".$detalls2."' WHERE id='".$id."'";
echo $sql."<br/>";
mysqli_query($con01, $sql) or die(mysqli_error());


// LOGs
$user = $_SESSION['username'];
$table = "Entitat";
$sqlLog = "INSERT INTO accions_user (user, tipus, taula, temps) VALUES ('".$user."','U','".$table."', CURRENT_TIMESTAMP)";
mysqli_query($con01, $sqlLog) or die(mysqli_error());

header("Location: ../entitats.php?&msgOk",TRUE, 302);
exit;

?>