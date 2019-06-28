<?php

require_once('connexions/connexio01.php');

$oceania = 6;

$arr = ["Australia", "New Zealand", "Papua New Guinea", "Indonesia", "Philippines",
  "Fiji", "Malaysia", "Brunei"];


foreach ($arr as $value) {
    echo "<p>".$value."</p>";
    $sql ="INSERT INTO paisos (nom, continents_id) VALUES ('".$value."','".$oceania."')";
    echo $sql."<br/>";
    mysqli_query($con01, $sql) or die("Error: ".mysqli_error($con01));
}


?>