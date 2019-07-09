<?php include("../common/mysessions.php"); ?>
<?php require_once('../connexions/connexio01.php'); ?>
<?php 


$idc = $_REQUEST['idc'];
$temporada = addslashes($_REQUEST['temporada']);
$competicio = (($_REQUEST['competicio']));
$categoria = (($_REQUEST['categoria']));
$entrenador = (addslashes($_REQUEST['entrenador']));
$detalls1 = (addslashes($_REQUEST['detalls1']));
$detalls2 = (addslashes($_REQUEST['detalls2']));
$pj = $_REQUEST['pj'];
$pg = $_REQUEST['pg'];
$pe = $_REQUEST['pe'];
$pp = $_REQUEST['pp'];
$punts = (addslashes($_REQUEST['punts']));
$gf = $_REQUEST['gf'];
$gc = $_REQUEST['gc'];
$classif = (addslashes($_REQUEST['classif']));

$sql ="INSERT INTO competicio_entitat (id_entitat, temporada, id_competicio, id_categoria, tecnic, detalls1, pj, pg, pe, pp, gf, gc, punts, classificacio, detalls2) VALUES ('".$idc."', '".$temporada."', '".$competicio."', '".$categoria."', '".$entrenador."', '".$detalls1."', '".$pj."', '".$pg."', '".$pe."', '".$pp."', '".$gf."', '".$gc."', '".$punts."', '".$classif."', '".$detalls2."')";
echo $sql."<br/>";
mysqli_query($con01, $sql) or die(mysqli_error());


// LOGs
$user = $_SESSION['username'];
$table = "Competició Entitat";
$sqlLog = "INSERT INTO accions_user (user, tipus, taula, temps) VALUES ('".$user."','I','".$table."', CURRENT_TIMESTAMP)";
echo $sqlLog."<br/>";
mysqli_query($con01, $sqlLog) or die(mysqli_error());

header("Location: ../entitat.php?id=".$idc."&msgOk",TRUE, 302);
exit;

?>