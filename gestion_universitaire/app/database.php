<?php
$host = 'localhost';
$user = 'root';
$password= '';
$dbname = 'gestion_universitaire';

$conn = new mysqli($host,$user,$password,$dbname);
if ($conn->connect_error) {
    die("Connexion failed: " . $conn->$connect->error);
}
echo "Connexion reussie";
?>