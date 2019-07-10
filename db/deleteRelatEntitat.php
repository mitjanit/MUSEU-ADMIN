<?php include("../common/mysessions.php"); ?>
<?php require_once('../connexions/connexio01.php'); ?>
<?php 


$id = $_REQUEST['id'];
$idc = $_REQUEST['idc'];
$sql ="DELETE FROM caixo_club WHERE id='".$id."'";
//echo $sql."<br/>";
mysqli_query($con01, $sql) or die(mysqli_error());


// LOGs
$user = $_SESSION['username'];
$table = "Relat Entitat";
$sqlLog = "INSERT INTO accions_user (user, tipus, taula, temps) VALUES ('".$user."','D','".$table."', CURRENT_TIMESTAMP)";
mysqli_query($con01, $sqlLog) or die(mysqli_error());

header("Location: ../entitat.php?id=".$idc."&msgOk",TRUE, 302);
exit;

?>