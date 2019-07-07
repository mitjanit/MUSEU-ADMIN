<?php include("../common/mysessions.php"); ?>
<?php require_once('../connexions/connexio01.php'); ?>
<?php 


$id = (addslashes($_REQUEST['id']));
$nom = (addslashes($_REQUEST['nom']));
$provincia = $_REQUEST['provincia'];


$sql ="INSERT INTO poblacions (nom ,provincies_id) VALUES ('".$nom."','".$provincia."')";
echo $sql."<br/>";
mysqli_query($con01, $sql) or die(mysqli_error());


// LOGs
$user = $_SESSION['username'];
$table = "Poblacions";

$sqlLog = "INSERT INTO accions_user (user, tipus, taula, temps) VALUES ('".$user."','I','".$table."', CURRENT_TIMESTAMP)";
echo $sqlLog."<br/>";
mysqli_query($con01, $sqlLog) or die(mysqli_error());

header("Location: ../poblacions.php?msgOk",TRUE, 302);
exit;

?>