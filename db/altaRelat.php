<?php include("../common/mysessions.php"); ?>
<?php require_once('../connexions/connexio01.php'); ?>
<?php 


$id = (addslashes($_REQUEST['id']));
$idp = $_REQUEST['idp'];
$role = $_REQUEST['rolen'];
$temporada = (addslashes($_REQUEST['temporada']));
$club = $_REQUEST['club'];
$relat = (addslashes($_REQUEST['relat']));

$sql ="INSERT INTO caixo_persona (id_persona, role, temporada, club, comentari) VALUES ('".$idp."','".$role."','".$temporada."','".$club."','".$relat."')";
echo $sql."<br/>";
mysqli_query($con01, $sql) or die(mysqli_error());


// LOGs
$user = $_SESSION['username'];
$table = "Relat";

$sqlLog = "INSERT INTO accions_user (user, tipus, taula, temps) VALUES ('".$user."','I','".$table."', CURRENT_TIMESTAMP)";
echo $sqlLog."<br/>";
mysqli_query($con01, $sqlLog) or die(mysqli_error());

if(isset($_REQUEST['relats'])){
	header("Location: ../relats.php?msgOk",TRUE, 302);
}
else {
	header("Location: ../persona.php?id=".$idp."&msgOk",TRUE, 302);
}
exit;

?>