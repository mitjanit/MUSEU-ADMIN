<?php include("../common/mysessions.php"); ?>
<?php require_once('../connexions/connexio01.php'); ?>
<?php 


//$id = (addslashes($_REQUEST['id']));
$nome = addslashes($_REQUEST['nome']);
$nom = addslashes($_REQUEST['nom']);
$ap1 = addslashes($_REQUEST['llinatge1']);
$ap2 = addslashes($_REQUEST['llinatge2']);
$croniques = $_REQUEST['reportatges'];
$fotos = $_REQUEST['fotos'];
$ficha = $_REQUEST['ficha'];
$entrevistes = $_REQUEST['entrevistes'];
$neix = $_REQUEST['naixement'];
$mort = $_REQUEST['mort'];
$detalls_mort = (addslashes($_REQUEST['detallsmort']));
$detalls = (addslashes($_REQUEST['detalls']));
$detalls2 = (addslashes($_REQUEST['detalls2']));
$material = (addslashes($_REQUEST['materials']));
$dada1 = (addslashes($_REQUEST['altre1']));
$dada2 = (addslashes($_REQUEST['altre2']));
$dada3 = (addslashes($_REQUEST['altre3']));
$dni = (addslashes($_REQUEST['dni']));
$poble = $_REQUEST['poblacio'];
$provincia = $_REQUEST['provincia'];
$pais = $_REQUEST['pais'];


/*
INSERT INTO `trajectoria_persona` (`id`, `id_persona`, `role`, `temporada`, `id_club`, `id_carrec`, `id_visitant`, `id_categoria`, `id_competicio`, `id_demarcacio`, `detalls1`, `pj`, `resultat`, `pg`, `pe`, `pp`, `gf`, `gc`, `classificacio`, `detalls2`, `actuacio`, `num_equips`, `entrenador`) VALUES (NULL, '1', 'J', '2020', '4', '3', '1', '2', '1', '3', 'detall 1', '38', '5 / 20', '22', '10', '6', '44', '31', ' 4 / 18', 'detalls 2', 'actuacio', '22', 'entrenador');

PENDENTTTTTTTTTTTTTTTTTTTTTTTTTTTTTTTTTTTTT

*/

$sql ="INSERT INTO trajectoria_persona (id_persona, role, temporada, id_club, id_carrec, id_visitant, id_categoria, id_competicio, id_demarcacio, detalls1, pj, resultat, pg, pe, pp, gf, gc, classificacio, detalls2, actuacio, num_equips, entrenador) VALUES ('".$nome."', '".$nom."', '".$ap1."', '".$ap2."', '".$croniques."', '".$fotos."', '".$entrevistes."', '".$neix."', '".$mort."', '".$detalls_mort."', '".$detalls."', '".$material."', '".$ficha."', '".$dada1."', '".$dada2."', '".$dada3."', '".$detalls2."', '".$dni."', '".$poble."', '".$provincia."', '".$pais."')";
echo $sql."<br/>";
mysqli_query($con01, $sql) or die(mysqli_error());


// LOGs
$user = $_SESSION['username'];
$table = "Persona";
$sqlLog = "INSERT INTO accions_user (user, tipus, taula, temps) VALUES ('".$user."','I','".$table."', CURRENT_TIMESTAMP)";
echo $sqlLog."<br/>";
mysqli_query($con01, $sqlLog) or die(mysqli_error());

header("Location: ../persones.php?msgOk",TRUE, 302);
exit;

?>