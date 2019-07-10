<?php include("../common/mysessions.php"); ?>
<?php require_once('../connexions/connexio01.php'); ?>
<?php 


//$id = (addslashes($_REQUEST['id']));
$idc = $_REQUEST['idc'];
$temporada = (addslashes($_REQUEST['temporada']));
$relat = (addslashes($_REQUEST['relat']));

$sql ="INSERT INTO caixo_club (club, temporada, comentari) VALUES ('".$idc."','".$temporada."','".$relat."')";
echo $sql."<br/>";
mysqli_query($con01, $sql) or die(mysqli_error());


// LOGs
$user = $_SESSION['username'];
$table = "Relat Entitat";

$sqlLog = "INSERT INTO accions_user (user, tipus, taula, temps) VALUES ('".$user."','I','".$table."', CURRENT_TIMESTAMP)";
echo $sqlLog."<br/>";
mysqli_query($con01, $sqlLog) or die(mysqli_error());

header("Location: ../entitat.php?id=".$idc."&msgOk",TRUE, 302);
exit;

?>