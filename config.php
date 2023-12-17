<?php
    $servername = "localhost";
    $username = "root";
    $password = "root";
    $dbname = "nunes_sports";
    
    // Cria conexão
    $conn = new mysqli($servername, $username, $password, $dbname);
    
    // Verifica conexão
    if ($conn->connect_error) {
      die("Connection failed: " . $conn->connect_error);
    }
?>
    