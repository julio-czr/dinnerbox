<?php
$servername = "localhost";
$username = "julces35_dinnerboxd";
$password = "Q1O90bRmy&";
$dbname = "julces35_dinnerboxd";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Falha na conexão com o banco de dados: " . $conn->connect_error);
}
?>