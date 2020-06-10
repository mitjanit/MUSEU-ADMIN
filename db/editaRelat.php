<?php include("../common/mysessions.php"); ?>
<?php require_once('../connexions/connexio01.php'); ?>
<?php 


$id = (addslashes($_REQUEST['id']));
$idp = $_REQUEST['idp'];
$role = $_REQUEST['role'];
$temporada = (addslashes($_REQUEST['temporada']));
$club = (addslashes($_REQUEST['club']));
$relat = (addslashes($_REQUEST['relat']));

// (id_persona, role, temporada, comentari)

$sql ="UPDATE caixo_persona SET temporada='".$temporada."' , club='".$club."' , comentari='".$relat."', role='".$role."', id_persona='".$idp."' WHERE id='".$id."'";
//echo $sql."<br/>";
mysqli_query($con01, $sql) or die(mysqli_error());


// LOGs
$user = $_SESSION['username'];
$table = "Relat";
$sqlLog = "INSERT INTO accions_user (user, tipus, taula, temps) VALUES ('".$user."','U','".$table."', CURRENT_TIMESTAMP)";
mysqli_query($con01, $sqlLog) or die(mysqli_error());

if(isset($_REQUEST['relats'])){
	header("Location: ../relats.php?msgOk",TRUE, 302);
}
else {
	header("Location: ../persona.php?id=".$idp."&msgOk",TRUE, 302);
}
exit;

?>