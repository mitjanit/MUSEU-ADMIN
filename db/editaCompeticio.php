<?php include("../common/mysessions.php"); ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <title>Admin - Museu Futbol Menorquí</title>
</head>
<body>
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

//header("Location: ../competicions.php?msgOk",TRUE, 302);
//exit();

?>
<script>
window.location.replace("../competicions.php?msgOk");
</script>
</body>