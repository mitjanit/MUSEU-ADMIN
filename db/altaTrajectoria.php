<?php include("../common/mysessions.php"); ?>
<?php require_once('../connexions/connexio01.php'); ?>
<?php 


//$id = (addslashes($_REQUEST['id']));
$idp = $_REQUEST['idp'];
$role = $_REQUEST['role'];
$temporada = addslashes($_REQUEST['temporada']);
$demarcacio = ($_REQUEST['demarcacio']);
$carrec=1;  // Un valor que existeixi
if(isset($_REQUEST['carrec'])){
	$carrec = ($_REQUEST['carrec']);  // No sempre hi és !!!
}
$actuacio = "";
if(isset($_REQUEST['actuacio'])){
	$actuacio = ($_REQUEST['actuacio']);  // No sempre hi és !!!
}
$num_equips = 0;
if(isset($_REQUEST['num_equips'])){
	$num_equips = ($_REQUEST['num_equips']);  // No sempre hi és !!!
}
$vinculat = ($_REQUEST['vinculat']);
$visitant = ($_REQUEST['visitant']);
$entrenador = (addslashes($_REQUEST['entrenador']));
$detalls1 = (addslashes($_REQUEST['detalls1']));
$detalls2 = (addslashes($_REQUEST['detalls2']));
$categoria = $_REQUEST['categoria'];
$competicio = $_REQUEST['competicio'];
$pj = $_REQUEST['pj'];
$resultat = (addslashes($_REQUEST['resultat']));
$pg = $_REQUEST['pc'];
$pe = $_REQUEST['ps'];
$pp = 0;
if(isset($_REQUEST['pp'])){
	$pp = ($_REQUEST['pp']);  // No sempre hi és !!!
}
$gf = $_REQUEST['gf'];
$gc = $_REQUEST['gc'];
$classif = (addslashes($_REQUEST['classif']));

$sql ="INSERT INTO trajectoria_persona (id_persona, role, temporada, id_club, id_carrec, id_visitant, id_categoria, id_competicio, id_demarcacio, detalls1, pj, resultat, pg, pe, pp, gf, gc, classificacio, detalls2, actuacio, num_equips, entrenador) VALUES ('".$idp."', '".$role."', '".$temporada."', '".$vinculat."', '".$carrec."', '".$visitant."', '".$categoria."', '".$competicio."', '".$demarcacio."', '".$detalls1."', '".$pj."', '".$resultat."', '".$pg."', '".$pe."', '".$pp."', '".$gf."', '".$gc."', '".$classif."', '".$detalls2."', '".$actuacio."', '".$num_equips."', '".$entrenador."')";
echo $sql."<br/>";
mysqli_query($con01, $sql) or die(mysqli_error());


// LOGs
$user = $_SESSION['username'];
$tt = "Jugador";
switch($role){
	case "J": $tt = "Jugador"; break;
	case "E": $tt = "Entrenador"; break;
	case "A": $tt = "Arbit"; break;
	case "D": $tt = "Directiu"; break;
	case "O": $tt = "Altre Càrrec"; break;
}
$table = "Trajectoria ".$tt;
$sqlLog = "INSERT INTO accions_user (user, tipus, taula, temps) VALUES ('".$user."','I','".$table."', CURRENT_TIMESTAMP)";
echo $sqlLog."<br/>";
mysqli_query($con01, $sqlLog) or die(mysqli_error());

header("Location: ../persona.php?id=".$idp."&msgOk",TRUE, 302);
exit;

?>