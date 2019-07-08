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
$material = (addslashes($_REQUEST['material']));
$dada1 = (addslashes($_REQUEST['altre1']));
$dada2 = (addslashes($_REQUEST['altre2']));
$dada3 = (addslashes($_REQUEST['altre3']));
$dni = (addslashes($_REQUEST['dni']));
$poble = $_REQUEST['poblacio'];
$provincia = $_REQUEST['provincia'];
$pais = $_REQUEST['pais'];


/*
INSERT INTO `museu`.`persones` (`id`, `nom_esportiu`, `nom`, `ap1`, `ap2`, `alias`, `croniques`, `fotos`, `entrevistes`, `data_naixament`, `mort`, `mort_detall`, `detalls`, `material`, `ficha`, `dada1`, `dada2`, `dada3`, `detalls2`, `dni`, `poblacions_id`, `provincia_id`, `paisos_id`) VALUES (NULL, 'nom esportiu', 'nom', 'ap1', 'ap2', NULL, '1', '2', '3', '1977', NULL, NULL, '', '', '4', 'dada1', 'dada2', 'dada3', 'detalls2', '18224876k', '1', '51', '1');
*/

$sql ="INSERT INTO persones (nom_esportiu, nom, ap1, ap2, croniques, fotos, entrevistes, data_naixament, mort, mort_detall, detalls, material, ficha, dada1, dada2, dada3, detalls2, dni, poblacions_id, provincia_id, paisos_id) VALUES ('".$nome."', '".$nom."', '".$ap1."', '".$ap2."', '".$croniques."', '".$fotos."', '".$entrevistes."', '".$neix."', '".$mort."', '".$detalls_mort."', '".$detalls."', '".$material."', '".$ficha."', '".$dada1."', '".$dada2."', '".$dada3."', '".$detalls2."', '".$dni."', '".$poble."', '".$provincia."', '".$pais."')";
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