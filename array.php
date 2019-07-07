<?php

require_once('connexions/connexio01.php');

$provincia = 7;  //Mallorca

$arr = ["Alaró","Alcúdia","Algaida","Andratx","Ariany","Artà","Banyalbufar","Binissalem","Búger","Bunyola","Calvià","Campanet", "Campos", "Capdepera", "Consell", "Costitx", "Deià", "Escorca", "Esporles", "Estellencs", "Felanitx	Mallorca", "Fornalutx", "Inca", "Lloret de Vistalegre", "Lloseta", "Llubí", "Llucmajor", "Manacor", "Mancor de la Vall", "Maria de la Salut", "Marratxí", "Montuïri", "Muro", "Palma", "Petra", "Sa Pobla", "Pollença", "Porreres", "Puigpunyent", "Ses Salines", "Sant Joan", "Sant Llorenç des Cardassar", "Santa Eugènia", "Santa Margalida", "Santa Maria del Camí", "Santanyí", "Selva", "Sencelles", "Sineu", "Sóller", "Son Servera","Valldemossa","Vilafranca de Bonany"];


foreach ($arr as $value) {
    echo "<p>".$value."</p>";
    $sql ="INSERT INTO poblacions (nom, provincies_id) VALUES ('".$value."','".$provincia."')";
    echo $sql."<br/>";
    mysqli_query($con01, $sql) or die("Error: ".mysqli_error($con01));
}


?>