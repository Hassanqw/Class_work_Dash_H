<?php 
$server = "mysql:host=localhost:3307;dbname=202407c";
$user = "root";
$pass = "";

$pdo = new PDO($server ,$user ,$pass);
echo "connect";
?>      