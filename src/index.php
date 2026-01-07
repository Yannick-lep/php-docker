<?php 
//phpinfo(); 

$host = 'db';
$username = 'root';
$password = 'root';
$database = 'phpdb';

try {
    $conn = new PDO("mysql:host=$host;dbname=$database;charset=utf8", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    die("Good connecté à la base de donnée ;-)");
} catch (PDOException $e) {
    echo "Ho ho Connection failed !!! => " . $e->getMessage();
    die();
}

?>
