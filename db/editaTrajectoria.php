<?php include("../common/mysessions.php"); ?>
<?php require_once('../connexions/connexio01.php'); ?>
<?php 


$id = $_REQUEST['id'];
$idp = $_REQUEST['idp'];
$role = $_REQUEST['role'];
$temporada = addslashes($_REQUEST['temporada']);

// DEMARCACIO
$demarcacio = 1;
if(isset($_REQUEST['demarcacio'])){
	$demarcacio = ($_REQUEST['demarcacio']);  // No sempre hi és !!!
}

// CARREC
$carrec=1;  // Un valor que existeixi
if(isset($_REQUEST['carrec'])){
	$carrec = ($_REQUEST['carrec']);  // No sempre hi és !!!
}

//ACTUACIO 
$actuacio = "";
if(isset($_REQUEST['actuacio'])){
	$actuacio = ($_REQUEST['actuacio']);  // No sempre hi és !!!
}

// NUM EQUIPS
$num_equips = 0;
if(isset($_REQUEST['nequips'])){
	$num_equips = ($_REQUEST['nequips']);  // No sempre hi és !!!
}
$vinculat = ($_REQUEST['vinculat']);
$visitant = ($_REQUEST['visitant']);

// Entrenador - President - Representant
$entrenador = "";
if(isset($_REQUEST['entrenador'])){
	$entrenador = (addslashes($_REQUEST['entrenador']));
}
else if(isset($_REQUEST['president'])){
	$entrenador = (addslashes($_REQUEST['president']));
}
else if(isset($_REQUEST['representant'])){
	$entrenador = (addslashes($_REQUEST['representant']));
}
$detalls1 = (addslashes($_REQUEST['detalls1']));
$detalls2 = (addslashes($_REQUEST['detalls2']));
$categoria = $_REQUEST['categoria'];
$competicio = $_REQUEST['competicio'];

// PJ o ACT
$pj = 0;
if(isset($_REQUEST['pj'])){
	$pj = $_REQUEST['pj'];
}
else if(isset($_REQUEST['act'])){
	$pj = $_REQUEST['act'];
}

// RESULTAT o CATEG
$resultat = "";
if(isset($_REQUEST['pj'])){
	$resultat = (addslashes($_REQUEST['resultat']));
}
else if(isset($_REQUEST['categ'])){
	$resultat = (addslashes($_REQUEST['categ']));
}

// PG o PC o SUP
$pg = 0;
if(isset($_REQUEST['pc'])){
	$pg = $_REQUEST['pc'];
}
else if(isset($_REQUEST['pg'])){
	$pg = $_REQUEST['pg'];
}
else if(isset($_REQUEST['sup'])){
	$pg = $_REQUEST['sup'];
}

// PE o PS o INF
$pe = 0;
if(isset($_REQUEST['pe'])){
	$pe = $_REQUEST['pe'];
}
else if(isset($_REQUEST['ps'])){
	$pe = $_REQUEST['ps'];
}
else if(isset($_REQUEST['inf'])){
	$pe = $_REQUEST['inf'];
}

// PP o JLINEA
$pp = 0;
if(isset($_REQUEST['pp'])){
	$pp = ($_REQUEST['pp']);  // No sempre hi és !!!
}
else if(isset($_REQUEST['jlinea'])){
	$pp = $_REQUEST['jlinea'];
}

// GF
$gf = 0;
if(isset($_REQUEST['gf'])){
	$gf = ($_REQUEST['gf']);  // No sempre hi és !!!
}

// GC
$gc = 0;
if(isset($_REQUEST['gc'])){
	$gc = ($_REQUEST['gc']);  // No sempre hi és !!!
}

// CLASSIF
$classif = (addslashes($_REQUEST['classif']));


$sql ="UPDATE trajectoria_persona SET temporada ='".$temporada."', id_club='".$vinculat."', id_carrec='".$carrec."', id_visitant='".$visitant."', id_categoria='".$categoria."', id_competicio='".$competicio."', id_demarcacio='".$demarcacio."', detalls1='".$detalls1."', pj='".$pj."', resultat='".$resultat."', pg='".$pg."', pe='".$pe."', pp='".$pp."', gf='".$gf."', gc='".$gc."', classificacio='".$classif."', detalls2='".$detalls2."', actuacio='".$actuacio."', num_equips='".$num_equips."', entrenador='".$entrenador."' WHERE id='".$id."'";
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
$sqlLog = "INSERT INTO accions_user (user, tipus, taula, temps) VALUES ('".$user."','U','".$table."', CURRENT_TIMESTAMP)";
echo $sqlLog."<br/>";
mysqli_query($con01, $sqlLog) or die(mysqli_error());

header("Location: ../persona.php?id=".$idp."&msgOk",TRUE, 302);
exit;

?>