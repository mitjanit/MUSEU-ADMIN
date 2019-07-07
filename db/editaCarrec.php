<?php include("../common/mysessions.php"); ?>
<?php require_once('../connexions/connexio01.php'); ?>
<?php 


$id = $_REQUEST['id'];
$nom = (addslashes($_REQUEST['nom']));
$descripcio = (addslashes($_REQUEST['descripcio']));
$directiu = (addslashes($_REQUEST['directiu']));

$sql ="UPDATE carrecs SET nom='".$nom."' , descripcio='".$descripcio."' , directiu='".$directiu."' WHERE id='".$id."'";
//echo $sql."<br/>";
mysqli_query($con01, $sql) or die(mysqli_error());


// LOGs
$user = $_SESSION['username'];
$table = "Carrecs";
$sqlLog = "INSERT INTO accions_user (user, tipus, taula, temps) VALUES ('".$user."','U','".$table."', CURRENT_TIMESTAMP)";
mysqli_query($con01, $sqlLog) or die(mysqli_error());

header("Location: ../carrecs.php?msgOk",TRUE, 302);
exit;

?>