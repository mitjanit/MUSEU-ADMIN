<?php include("../common/mysessions.php"); ?>
<?php require_once('../connexions/connexio01.php'); ?>
<?php 

$idp = $_REQUEST['idp'];
$id = $_REQUEST['id'];
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

$sql ="UPDATE document_persona SET temporada =  '".$temporada."', document = '".$document."', continguts = '".$continguts."', premsa = '".$premsa."', altres = '".$altres."', fitxa = '".$fitxa."', foto = '".$fotos."', entrevista = '".$entrevista."', reportatge =  '".$reportatge."', altre1 =  '".$altre1."', altre2 = '".$altre2."', altre3 = '".$altre3."', detalls = '".$detalls."', fitxad = '".$detallsfitxa."', fotod = '".$detallsfotos."', entrevistad = '".$detallsentrevista."', reportatged = '".$detallsreportatge."', altre1d = '".$detallsaltre1."', altre2d = '".$detallsaltre2."', altre3d = '".$detallsaltre3."' WHERE id='".$id."'";
echo $sql."<br/>";
mysqli_query($con01, $sql) or die(mysqli_error());


// LOGs
$user = $_SESSION['username'];
$table = "Document Persona";
$sqlLog = "INSERT INTO accions_user (user, tipus, taula, temps) VALUES ('".$user."','U','".$table."', CURRENT_TIMESTAMP)";
mysqli_query($con01, $sqlLog) or die(mysqli_error());

header("Location: ../persona.php?id=".$idp."&msgOk",TRUE, 302);
exit;

?>