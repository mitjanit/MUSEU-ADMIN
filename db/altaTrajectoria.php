<?php include("../common/mysessions.php"); ?>
<?php require_once('../connexions/connexio01.php'); ?>
<?php 


//$id = (addslashes($_REQUEST['id']));
$idp = $_REQUEST['idp'];
$role = $_REQUEST['role'];
$temporada = addslashes($_REQUEST['temporada']);
$demarcacio = ($_REQUEST['demarcacio']);
$carrec = ($_REQUEST['carrec']);  // No sempre hi és !!!
$actuacio = ($_REQUEST['actuació']);  // No sempre hi és !!!
$vinculat = ($_REQUEST['vinculat']);
$visitant = ($_REQUEST['visitant']);
$entrenador = (addslashes($_REQUEST['entrenador']));
$detalls1 = (addslashes($_REQUEST['detalls1']));
$detalls2 = (addslashes($_REQUEST['detalls2']));
$categoria = $_REQUEST['categoria'];
$competicio = $_REQUEST['competicio'];
$pj = $_REQUEST['pj'];
$resultat = (addslashes($_REQUEST['resultat']));
$pc = $_REQUEST['pc'];
$ps = $_REQUEST['ps'];
$gf = $_REQUEST['gf'];
$gc = $_REQUEST['gc'];
$classif = (addslashes($_REQUEST['classif']));

/*
INSERT INTO `trajectoria_persona` (`id`, `id_persona`, `role`, `temporada`, `id_club`, `id_carrec`, `id_visitant`, `id_categoria`, `id_competicio`, `id_demarcacio`, `detalls1`, `pj`, `resultat`, `pg`, `pe`, `pp`, `gf`, `gc`, `classificacio`, `detalls2`, `actuacio`, `num_equips`, `entrenador`) VALUES (NULL, '1', 'J', '2020', '4', '3', '1', '2', '1', '3', 'detall 1', '38', '5 / 20', '22', '10', '6', '44', '31', ' 4 / 18', 'detalls 2', 'actuacio', '22', 'entrenador');

PENDENTTTTTTTTTTTTTTTTTTTTTTTTTTTTTTTTTTTTT

*/

$sql ="INSERT INTO trajectoria_persona (id_persona, role, temporada, id_club, id_carrec, id_visitant, id_categoria, id_competicio, id_demarcacio, detalls1, pj, resultat, pg, pe, pp, gf, gc, classificacio, detalls2, actuacio, num_equips, entrenador) VALUES ('".$idp."', '".$role."', '".$temporada."', '".$vinculat."', '".$carrec."', '".$visitant."', '".$categoria."', '".$competicio."', '".$demarcacio."', '".$detalls1."', '".$pj."', '".$resultat."', '".$pg."', '".$pe."', '".$pp."', '".$gf."', '".$gc."', '".$classif."', '".$detalls2."', '".$actuacio."', '".$num_equips."', '".$entrenador."')";
echo $sql."<br/>";
mysqli_query($con01, $sql) or die(mysqli_error());


// LOGs
$user = $_SESSION['username'];
$table = "Trajectoria Jugador";
$sqlLog = "INSERT INTO accions_user (user, tipus, taula, temps) VALUES ('".$user."','I','".$table."', CURRENT_TIMESTAMP)";
echo $sqlLog."<br/>";
mysqli_query($con01, $sqlLog) or die(mysqli_error());

header("Location: ../persona.php?id=".$idp."&msgOk",TRUE, 302);
exit;

?>