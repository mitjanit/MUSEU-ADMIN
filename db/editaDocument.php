<?php include("../common/mysessions.php"); ?>
<?php require_once('../connexions/connexio01.php'); ?>
<?php 

$idc = $_REQUEST['idc'];
$id = $_REQUEST['id'];
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

$cfoto = (addslashes($_REQUEST['cfoto']));
$centrevista = (addslashes($_REQUEST['centrevista']));
$creportatge = (addslashes($_REQUEST['creportatge']));
$ccartell = (addslashes($_REQUEST['ccartell']));
$cllibre = (addslashes($_REQUEST['cllibre']));
$cvideo = (addslashes($_REQUEST['cvideo']));
$caltre1 = (addslashes($_REQUEST['caltre1']));
$caltre2 = (addslashes($_REQUEST['caltre2']));

$sql ="UPDATE document_entitat SET temporada =  '".$temporada."', document = '".$document."', continguts = '".$continguts."', premsa = '".$premsa."', altres = '".$altres."', foto = '".$fotos."', entrevista = '".$entrevista."', reportatge =  '".$reportatge."', cartell = '".$cartell."', llibre = '".$llibre."', video = '".$video."', altre1 =  '".$altre1."', altre2 = '".$altre2."', detalls = '".$detalls."', fotod = '".$detallsfotos."', entrevistad = '".$detallsentrevista."', reportatged = '".$detallsreportatge."', cartelld = '".$detallscartell."', llibred = '".$detallsllibre."', videod = '".$detallsvideo."', altre1d = '".$detallsaltre1."', altre2d = '".$detallsaltre2."', cfoto = '".$cfoto."', centrevista = '".$centrevista."', creportatge = '".$creportatge."', ccartell = '".$ccartell."', cllibre = '".$cllibre."', cvideo = '".$cvideo."', caltre1 = '".$caltre1."', caltre2 = '".$caltre2."' WHERE id='".$id."'";
echo $sql."<br/>";
mysqli_query($con01, $sql) or die(mysqli_error());


// LOGs
$user = $_SESSION['username'];
$table = "Document Entitat";
$sqlLog = "INSERT INTO accions_user (user, tipus, taula, temps) VALUES ('".$user."','U','".$table."', CURRENT_TIMESTAMP)";
mysqli_query($con01, $sqlLog) or die(mysqli_error());

header("Location: ../entitat.php?id=".$idc."&msgOk",TRUE, 302);
exit;

?>