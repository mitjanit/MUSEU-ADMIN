<?php include("../common/mysessions.php"); ?>
<?php require_once('../connexions/connexio01.php'); ?>
<?php 


$id = $_REQUEST['id'];
$idp = $_REQUEST['idp'];
$sql ="DELETE FROM caixo_persona WHERE id='".$id."'";
//echo $sql."<br/>";
mysqli_query($con01, $sql) or die(mysqli_error());


// LOGs
$user = $_SESSION['username'];
$table = "Relat";
$sqlLog = "INSERT INTO accions_user (user, tipus, taula, temps) VALUES ('".$user."','D','".$table."', CURRENT_TIMESTAMP)";
mysqli_query($con01, $sqlLog) or die(mysqli_error());


if(isset($_REQUEST['relats'])){
	header("Location: ../relats.php?msgOk",TRUE, 302);
}
else {
	header("Location: ../persona.php?id=".$idp."&msgOk",TRUE, 302);
}
exit;

?>