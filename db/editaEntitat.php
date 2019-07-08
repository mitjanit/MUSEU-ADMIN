<?php include("../common/mysessions.php"); ?>
<?php require_once('../connexions/connexio01.php'); ?>
<?php 


$id = ($_REQUEST['id']);
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
$detalls_mort = (addslashes($_REQUEST['detallsmort']));
$altre = (addslashes($_REQUEST['altre']));
$detalls2 = (addslashes($_REQUEST['detalls2']));

$sql ="UPDATE clubs SET nom_esportiu =  '".$nome."', nom = '".$nom."', ap1 = '".$ap1."', ap2 = '".$ap2."', croniques = '".$croniques."', fotos = '".$fotos."', entrevistes = '".$entrevistes."', data_naixament =  '".$naixement."', mort = '".$mort."', mort_detall = '".$detallsmort."', detalls = '".$detalls."', material =  '".$material."', ficha = '".$ficha."', dada1 = '".$dada1."', dada2 = '".$dada2."', dada3 = '".$dada3."', detalls2 = '".$detalls2."', dni = '".$dni."' WHERE id='".$id."'";
//echo $sql."<br/>";
mysqli_query($con01, $sql) or die(mysqli_error());


// LOGs
$user = $_SESSION['username'];
$table = "Entitat";
$sqlLog = "INSERT INTO accions_user (user, tipus, taula, temps) VALUES ('".$user."','U','".$table."', CURRENT_TIMESTAMP)";
mysqli_query($con01, $sqlLog) or die(mysqli_error());

header("Location: ../entitats.php?&msgOk",TRUE, 302);
exit;

?>