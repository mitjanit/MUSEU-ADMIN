<?php include("../common/mysessions.php"); ?>
<?php require_once('../connexions/connexio01.php'); ?>
<?php 


$id = (addslashes($_REQUEST['id']));
$nom = (addslashes($_REQUEST['nom']));
$descripcio = (addslashes($_REQUEST['descripcio']));
$directiu = (addslashes($_REQUEST['directiu']));



$sql ="INSERT INTO carrecs (nom ,descripcio, directiu) VALUES ('".$nom."','".$descripcio."','".$directiu."')";
echo $sql."<br/>";
mysqli_query($con01, $sql) or die(mysqli_error());


// LOGs
$user = $_SESSION['username'];
$table = "Càrrecs";

$sqlLog = "INSERT INTO accions_user (user, tipus, taula, temps) VALUES ('".$user."','I','".$table."', CURRENT_TIMESTAMP)";
echo $sqlLog."<br/>";
mysqli_query($con01, $sqlLog) or die(mysqli_error());

header("Location: ../carrecs.php?msgOk",TRUE, 302);
exit;

?>