<?php
     include_once "conconnSqlServerPDOl.php";

     //Limpa a tela
     popen('cls','w');

     try {
          $sql = "update department set name = 'marketing' where id = 1";
          $stmt = $conn->query($sql);
          // $row_count = $stmt->rowcount();
         
          echo "Department atualizado com sucesso!"; 
     } catch (PDOException $e) {
                echo "Error: ".$e->getMessage();
          }
     
     $conn = null;
?>