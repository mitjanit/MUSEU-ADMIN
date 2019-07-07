<?php

require_once('connexions/connexio01.php');

$provincia = 52;  //Eivissa

$arr = ["Eivissa","Sant Antoni de Portmany","Sant Joan de Labritja", "Sant Josep de sa Talaia","Santa Eulària des Riu"];


foreach ($arr as $value) {
    echo "<p>".$value."</p>";
    $sql ="INSERT INTO poblacions (nom, provincies_id) VALUES ('".$value."','".$provincia."')";
    echo $sql."<br/>";
    mysqli_query($con01, $sql) or die("Error: ".mysqli_error($con01));
}


?>