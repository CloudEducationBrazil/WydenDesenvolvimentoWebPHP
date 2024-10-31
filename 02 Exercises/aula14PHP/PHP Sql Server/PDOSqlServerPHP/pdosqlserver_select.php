<?php
     include_once "connSqlServerPDO.php";

     //Limpa a tela
     popen('cls','w');

     try {
          $sql = 'select * from department';
          $stmt = $conn->query($sql);
          // $row_count = $stmt->rowcount();
         
          while($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
               echo $row['id']." - ".$row['name']."\n"; 
          }
     } catch (PDOException $e) {
                echo "Error: ".$e->getMessage();
          }
     
     $conn = null;
?>