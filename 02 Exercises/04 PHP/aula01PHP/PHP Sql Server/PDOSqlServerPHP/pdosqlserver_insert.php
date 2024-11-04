<?php
     include_once "connSqlServerPDO.php";

     //Limpa a tela
     popen('cls','w');

     try {
          $sql = "insert into department (name) values ('comercial')";
          $stmt = $conn->query($sql);
          // $row_count = $stmt->rowcount();
         
          echo "Department cadastrado com sucesso!"; 
     } catch (PDOException $e) {
                echo "Error: ".$e->getMessage();
          }
     
     $conn = null;
?>