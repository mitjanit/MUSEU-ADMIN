<?php include("../common/mysessions.php"); ?>
<?php require_once('../connexions/connexio01.php'); ?>
<?php 


$id = ($_REQUEST['id']);
$nome = addslashes($_REQUEST['nome']);
$nom = addslashes($_REQUEST['nom']);
$ap1 = addslashes($_REQUEST['llinatge1']);
$ap2 = addslashes($_REQUEST['llinatge2']);
$croniques = $_REQUEST['reportatges'];
$fotos = $_REQUEST['fotos'];
$ficha = $_REQUEST['ficha'];
$entrevistes = $_REQUEST['entrevistes'];
$neix = $_REQUEST['naixement'];
$mort = $_REQUEST['mort'];
$detalls_mort = (addslashes($_REQUEST['detallsmort']));
$detalls = (addslashes($_REQUEST['detalls']));
$detalls2 = (addslashes($_REQUEST['detalls2']));
$material = (addslashes($_REQUEST['materials']));
$dada1 = (addslashes($_REQUEST['altre1']));
$dada2 = (addslashes($_REQUEST['altre2']));
$dada3 = (addslashes($_REQUEST['altre3']));
$dni = (addslashes($_REQUEST['dni']));
$poble = $_REQUEST['poblacio'];
$provincia = $_REQUEST['provincia'];
$pais = $_REQUEST['pais'];

$sql ="UPDATE persones SET nom_esportiu =  '".$nome."', nom = '".$nom."', ap1 = '".$ap1."', ap2 = '".$ap2."', croniques = '".$croniques."', fotos = '".$fotos."', entrevistes = '".$entrevistes."', data_naixament =  '".$naixement."', mort = '".$mort."', mort_detall = '".$detallsmort."', detalls = '".$detalls."', material =  '".$material."', ficha = '".$ficha."', dada1 = '".$dada1."', dada2 = '".$dada2."', dada3 = '".$dada3."', detalls2 = '".$detalls2."', dni = '".$dni."' WHERE id='".$id."'";
//echo $sql."<br/>";
mysqli_query($con01, $sql) or die(mysqli_error());


// LOGs
$user = $_SESSION['username'];
$table = "Persona";
$sqlLog = "INSERT INTO accions_user (user, tipus, taula, temps) VALUES ('".$user."','U','".$table."', CURRENT_TIMESTAMP)";
mysqli_query($con01, $sqlLog) or die(mysqli_error());

header("Location: ../persones.php?&msgOk",TRUE, 302);
exit;

?>