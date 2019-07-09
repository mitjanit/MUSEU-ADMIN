<?php include("../common/mysessions.php"); ?>
<?php require_once('../connexions/connexio01.php'); ?>
<?php 


$id = $_REQUEST['idc'];
$temporada = addslashes($_REQUEST['temporada']);
$document = (addslashes($_REQUEST['document']));
$continguts = (addslashes($_REQUEST['contingut']));
$premsa = (addslashes($_REQUEST['premsa']));
$altres = (addslashes($_REQUEST['altres']));
$detalls = (addslashes($_REQUEST['detalls']));
$fotos = $_REQUEST['fotos'];
$detallsfotos = (addslashes($_REQUEST['detallsfotos']));
$entrevista = $_REQUEST['entrevista'];
$detallsentrevista = (addslashes($_REQUEST['detallsentrevista']));
$reportatge = $_REQUEST['reportatge'];
$detallsreportatge = (addslashes($_REQUEST['detallsreportatge']));
$cartell = $_REQUEST['cartell'];
$detallscartell = (addslashes($_REQUEST['detallscartell']));
$llibre = $_REQUEST['llibre'];
$detallsllibre = (addslashes($_REQUEST['detallsllibre']));
$video = $_REQUEST['video'];
$detallsvideo = (addslashes($_REQUEST['detallsvideo']));
$altre1 = (addslashes($_REQUEST['altre1']));
$detallsaltre1 = (addslashes($_REQUEST['detallsaltre1']));
$altre2 = (addslashes($_REQUEST['altre2']));
$detallsaltre2 = (addslashes($_REQUEST['detallsaltre2']));

$sql ="INSERT INTO document_entitat (id_entitat, temporada, document, continguts, premsa, altres, foto, entrevista, reportatge, cartell, llibre, video, altre1, altre2, detalls, fotod, entrevistad, reportatged, cartelld, llibred, videod, altre1d, altre2d) VALUES ('".$id."', '".$temporada."', '".$document."', '".$continguts."', '".$premsa."', '".$altres."', '".$fotos."', '".$entrevista."', '".$reportatge."', '".$cartell."', '".$llibre."', '".$video."', '".$altre1."', '".$altre2."', '".$detalls."', '".$detallsfotos."', '".$detallsentrevista."', '".$detallsreportatge."', '".$detallscartell."', '".$detallsllibre."', '".$detallsvideo."', '".$detallsaltre1."', '".$detallsaltre2."')";
echo $sql."<br/>";
mysqli_query($con01, $sql) or die(mysqli_error());


// LOGs
$user = $_SESSION['username'];
$table = "Document Entitat";
$sqlLog = "INSERT INTO accions_user (user, tipus, taula, temps) VALUES ('".$user."','I','".$table."', CURRENT_TIMESTAMP)";
echo $sqlLog."<br/>";
mysqli_query($con01, $sqlLog) or die(mysqli_error());

header("Location: ../entitat.php?id=".$id."&msgOk",TRUE, 302);
exit;

?>