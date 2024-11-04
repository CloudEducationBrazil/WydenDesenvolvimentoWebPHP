<?php
     include_once "connSqlServerPDO.php";

     //Limpa a tela
     popen('cls','w');

     try {
          $sql = "delete from department where id = 7";
          $stmt = $conn->query($sql);
          // $row_count = $stmt->rowcount();
         
          echo "Department excluído com sucesso!"; 
     } catch (PDOException $e) {
                echo "Error: ".$e->getMessage();
          }
     
     $conn = null;
?>