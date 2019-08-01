<?php include("../common/mysessions.php"); ?>
<?php require_once('../connexions/connexio01.php'); ?>
<?php 


$id = $_REQUEST['idp'];
$vinculat = $_REQUEST['vinculat'];
$temporada = addslashes($_REQUEST['temporada']);
$document = (addslashes($_REQUEST['document']));
$continguts = (addslashes($_REQUEST['contingut']));
$premsa = (addslashes($_REQUEST['premsa']));
$altres = (addslashes($_REQUEST['altres']));
$detalls = (addslashes($_REQUEST['detalls']));

$fitxa = $_REQUEST['fitxa'];
$detallsfitxa = (addslashes($_REQUEST['detallsfitxa']));
$fotos = $_REQUEST['fotos'];
$detallsfotos = (addslashes($_REQUEST['detallsfotos']));
$entrevista = $_REQUEST['entrevista'];
$detallsentrevista = (addslashes($_REQUEST['detallsentrevista']));
$reportatge = $_REQUEST['reportatge'];
$detallsreportatge = (addslashes($_REQUEST['detallsreportatge']));

$altre1 = (addslashes($_REQUEST['altre1']));
$detallsaltre1 = (addslashes($_REQUEST['detallsaltre1']));
$altre2 = (addslashes($_REQUEST['altre2']));
$detallsaltre2 = (addslashes($_REQUEST['detallsaltre2']));
$altre3 = (addslashes($_REQUEST['altre3']));
$detallsaltre3 = (addslashes($_REQUEST['detallsaltre3']));

$sql ="INSERT INTO document_persona (id_persona, id_club, temporada, document, continguts, premsa, altres, fitxa, foto, entrevista, reportatge, altre1, altre2, altre3, detalls, fitxad, fotod, entrevistad, reportatged, altre1d, altre2d, altre3d) VALUES ('".$id."', '".$vinculat."', '".$temporada."', '".$document."', '".$continguts."', '".$premsa."', '".$altres."', '".$fitxa."', '".$fotos."', '".$entrevista."', '".$reportatge."', '".$altre1."', '".$altre2."', '".$altre3."', '".$detalls."', '".$detallsfitxa."', '".$detallsfotos."', '".$detallsentrevista."', '".$detallsreportatge."', '".$detallsaltre1."', '".$detallsaltre2."', '".$detallsaltre3."')";
echo $sql."<br/>";
mysqli_query($con01, $sql) or die(mysqli_error());


// LOGs
$user = $_SESSION['username'];
$table = "Document Persona";
$sqlLog = "INSERT INTO accions_user (user, tipus, taula, temps) VALUES ('".$user."','I','".$table."', CURRENT_TIMESTAMP)";
echo $sqlLog."<br/>";
mysqli_query($con01, $sqlLog) or die(mysqli_error());

header("Location: ../persona.php?id=".$id."&msgOk",TRUE, 302);
exit;

?>