<?php include("../common/mysessions.php"); ?>
<?php require_once('../connexions/connexio01.php'); ?>
<?php 

$id = $_REQUEST['id'];
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

$sql ="UPDATE competicio_entitat SET temporada = '".$temporada."', id_competicio = '".$competicio."', id_categoria = '".$categoria."', tecnic = '".$entrenador."', detalls1 = '".$detalls1."', pj = '".$pj."', pg = '".$pg."', pe =  '".$pe."', pp = '".$pp."', gf = '".$gf."', gc = '".$gc."', punts =  '".$punts."', classificacio = '".$classif."', detalls2 = '".$detalls2."' WHERE id='".$id."'";
echo $sql."<br/>";
mysqli_query($con01, $sql) or die(mysqli_error());


// LOGs
$user = $_SESSION['username'];
$table = "Competició Entitat";
$sqlLog = "INSERT INTO accions_user (user, tipus, taula, temps) VALUES ('".$user."','U','".$table."', CURRENT_TIMESTAMP)";
mysqli_query($con01, $sqlLog) or die(mysqli_error());

header("Location: ../entitat.php?id=".$idc."&msgOk",TRUE, 302);
exit;

?>