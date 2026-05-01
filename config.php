<?php
$conn = new mysqli("localhost", "root","", "vintage_shop");
if ($conn->connect_error) {
    die("Connexion échouée : " . $conn->connect_error);
}
?>