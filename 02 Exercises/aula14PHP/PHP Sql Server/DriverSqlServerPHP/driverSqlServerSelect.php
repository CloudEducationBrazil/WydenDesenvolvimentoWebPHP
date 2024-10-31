<?php
     include_once "connsqlSqlServerDriver.php";

     //Limpa a tela
     popen('cls','w');

     $sql = "select * from department";

     $stmt = sqlsrv_query( $conn, $sql);

     if( $stmt === false ) {
          die( print_r( sqlsrv_errors(), true));
     }

     while($row = sqlsrv_fetch_array($stmt, SQLSRV_FETCH_ASSOC)) {
          print_r($row);
     }
     
     sqlsrv_close($conn);
?>