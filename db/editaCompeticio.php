<?php include("../common/mysessions.php"); ?>
<?php require_once('../connexions/connexio01.php'); ?>
<?php 


$id = $_REQUEST['id'];
$nom = (addslashes($_REQUEST['nom']));
$descripcio = (addslashes($_REQUEST['descripcio']));

$sql ="UPDATE competicions SET nom='".$nom."' , descripcio='".$descripcio."' WHERE id='".$id."'";
//echo $sql."<br/>";
mysqli_query($con01, $sql) or die(mysqli_error());


// LOGs
$user = $_SESSION['username'];
$table = "Competicions";
$sqlLog = "INSERT INTO accions_user (user, tipus, taula, temps) VALUES ('".$user."','U','".$table."', CURRENT_TIMESTAMP)";
mysqli_query($con01, $sqlLog) or die(mysqli_error());

header("Location: ../competicions.php?msgOk",TRUE, 302);
//exit();

?>
<html>
<body>
	<p>meam</p>
<script>
window.location.replace("../competicions.php?msgOk");
</script>
</body>