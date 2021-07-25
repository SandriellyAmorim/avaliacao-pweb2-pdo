<?php
  try {
    $username = "root";
    $password = "root";
  
    $con = new PDO('mysql:host=localhost;dbname=bancoprova', $username, $password);
    $con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
  } catch(PDOException $e) {
    echo 'Conexão não realizada. Erro: ' . $e->getMessage();
  }
?>