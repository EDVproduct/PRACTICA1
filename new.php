<?php

$host = "localhost";
$user = "root";
$pass = "";
$db = "curriculum";
$port="3306";



try
{
  $conn = new PDO("mysql:host=$host;port=$port;dbname=$db",$user,$pass);
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  echo "Connectad<p>";
}
catch (PDOException $e)
{
  echo "imposible de connectar,que et pasa: " . $e->getMessage() ."<p>";
}
 ?>
