<?php
$host = 'localhost';
$dbname = 'user'; 
$username = 'root'; 
$password = ''; 

try {
    $conn = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo "Koneksi database gagal: " . $e->getMessage();
}
?>
