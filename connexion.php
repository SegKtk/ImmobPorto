<?php
$host = 'localhost';
$dbname = 'projetweb';
$username = 'honorat';
$password = 'rekenbe';

$dsn = "pgsql:host=$host;port=5432;dbname=$dbname;user=$username;password=$password";
$conn = null;
try{
 $conn = new PDO($dsn);
 $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
 if($conn){
  echo "Connecté à la base $dbname  avec succès! ";
 }
}catch (PDOException $e){
 echo $e->getMessage();
}
?>