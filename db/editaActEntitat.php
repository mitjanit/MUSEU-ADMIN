<?php include("../common/mysessions.php"); ?>
<?php require_once('../connexions/connexio01.php'); ?>
<?php 

$idc = $_REQUEST['idc'];
$id = $_REQUEST['id'];
$temporada = addslashes($_REQUEST['temporada']);
$tipus = (($_REQUEST['tipus']));
$actuacio = (addslashes($_REQUEST['actuacio']));
$detalls1 = (addslashes($_REQUEST['detalls1']));
$detalls2 = (addslashes($_REQUEST['detalls2']));
$fotos = $_REQUEST['fotos'];
$detallsfotos = (addslashes($_REQUEST['detallsfotos']));
$entrevista = $_REQUEST['entrevista'];
$detallsentrevista = (addslashes($_REQUEST['detallsentrevista']));
$reportatge = $_REQUEST['reportatge'];
$detallsreportatge = (addslashes($_REQUEST['detallsreportatge']));
$cartell = $_REQUEST['cartell'];
$detallscartell = (addslashes($_REQUEST['detallscartell']));
$programa = $_REQUEST['programa'];
$detallsprograma = (addslashes($_REQUEST['detallsprograma']));
$video = $_REQUEST['video'];
$detallsvideo = (addslashes($_REQUEST['detallsvideo']));
$altre1 = (addslashes($_REQUEST['altre1']));
$detallsaltre1 = (addslashes($_REQUEST['detallsaltre1']));
$altre2 = (addslashes($_REQUEST['altre2']));
$detallsaltre2 = (addslashes($_REQUEST['detallsaltre2']));


$sql ="UPDATE activitats_entitat SET temporada = '".$temporada."', tipus_act = '".$tipus."', actuacions = '".$actuacio."', detalls1 = '".$detalls1."', detalls2 = '".$detalls2."', fotos = '".$fotos."', entrevistes = '".$entrevista."', croniques = '".$reportatge."', cartell =  '".$cartell."', programa = '".$programa."', video = '".$video."', altre1 = '".$altre1."', altre2 =  '".$altre2."', fotod = '".$detallsfotos."', entrevistad = '".$detallsentrevista."', cronicad = '".$detallsreportatge."', cartelld = '".$detallscartell."', programad = '".$detallsprograma."', videod = '".$detallsvideo."', altre1d = '".$detallsaltre1."', altre2d = '".$detallsaltre2."' WHERE id='".$id."'";
echo $sql."<br/>";
mysqli_query($con01, $sql) or die(mysqli_error());


// LOGs
$user = $_SESSION['username'];
$table = "Activitat Entitat";
$sqlLog = "INSERT INTO accions_user (user, tipus, taula, temps) VALUES ('".$user."','U','".$table."', CURRENT_TIMESTAMP)";
mysqli_query($con01, $sqlLog) or die(mysqli_error());

header("Location: ../entitat.php?id=".$idc."&msgOk",TRUE, 302);
exit;

?>