<?php
require_once('../connexions/connexio01.php');
header("Content-Type: application/json; charset=UTF-8");
$stmt = $con01->prepare("SELECT * FROM provincies ORDER BY nom ASC");
if(isset($_REQUEST['pais'])){
	$stmt = $con01->prepare("SELECT * FROM provincies WHERE id_pais=".$_REQUEST['pais']);
}
$stmt = $con01->prepare("SELECT * FROM provincies ORDER BY nom ASC");
$stmt->execute();
$result = $stmt->get_result();
$outp = $result->fetch_all(MYSQLI_ASSOC);
echo json_encode($outp);
?>