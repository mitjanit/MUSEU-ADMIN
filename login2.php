<?php
session_start();


$c0 = utf8_decode($_REQUEST['user']);
$c1 = utf8_decode($_REQUEST['password']);

include("connexions/connexio01.php");
$sql ="SELECT * FROM user WHERE username='".$c0."' AND password='".$c1."'";
$rs = mysqli_query($con01, $sql) or die("Error: ".mysqli_error($con01));
$row = mysqli_fetch_array($rs);

if(mysqli_num_rows($rs)>=1){

  //Comprovar role
  //$sql2 ="SELECT * FROM userroles WHERE user='".$c0."' AND role='pclab'";
  $sql2 ="SELECT * FROM user WHERE username='".$c0."' AND password='".$c1."'";
  $rs2 = mysqli_query($con01, $sql2) or die("Error: ".mysqli_error($con01));
  $row2 = mysqli_fetch_array($rs2);

  if(mysqli_num_rows($rs2)>=1){
  	// Usuari, role i password correctes
    $_SESSION['usuari'] = $row['username'];
  	$_SESSION['username'] = $row['username'];
  	header("Location: index.php",TRUE, 302);
  	exit;
  }
  else {
  	header("Location: login.php?errorLog=2",TRUE, 302);
  	exit;
  }

  
}
else {
  header("Location: login.php?errorLog=1",TRUE, 302);
  exit;
}

?>