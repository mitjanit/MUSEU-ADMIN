<?php
session_start();
    if(!isset($_SESSION['username'])){
        header("Location: login.php",TRUE, 302);
        exit;
    }
?>