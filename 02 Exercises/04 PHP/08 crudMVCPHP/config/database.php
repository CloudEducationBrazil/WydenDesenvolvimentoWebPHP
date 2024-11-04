<?php
   $dbname = "clinicamedica"; // $dbname = "dbname=vendas";
   $host = "localhost:3306"; //  $host ="mysql:host=localhost:3306".$dbname;

   $username = "root";
   $pwd = "";

   try {
       $pdo = new PDO("mysql:host=$host;dbname=$dbname", $username, $pwd);
       $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
   } catch (PDOException $e) {
       echo "Falha na Conexão: " . $e->getMessage();
   }
?>