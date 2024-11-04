<!--
- Roteamento: 
    Para projetos maiores, considere usar um framework como Laravel, Slim ou Silex, 
    que oferecem roteamento avançado e outras funcionalidades.

- URLs Amigáveis: O sistema de rotas permite URLs mais legíveis e amigáveis. 

- Tratamento de Erros: Adicione tratamento de erros e validações nas entradas 
                       para melhorar a segurança e a usabilidade.

Nota: Para cadastrar agora chamar a rota
http://localhost/04 PHP/08 crudMVCPHP/app/views/departamento/create.php
-->

<?php
    header("Location: ../app/views/departamento/index.php");
    // se utilizar routes comentar a linha de cima e descomentar a linha debaixo
    // require_once 'routes.php';
?>