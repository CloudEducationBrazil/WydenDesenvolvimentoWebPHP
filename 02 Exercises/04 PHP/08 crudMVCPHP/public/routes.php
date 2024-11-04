<?php
    require_once '../config/database.php';
    require_once '../app/controllers/DepartamentoController.php';

    $controller = new DepartamentoController($pdo);

    // Roteamento simples
    $requestUri = explode('?', $_SERVER['REQUEST_URI'])[0];
    $method = $_SERVER['REQUEST_METHOD'];

    switch ($requestUri) {
        case '/departamento':
            if ($method === 'GET') {
                $controller->read(); // Listar departamentos
                include '../app/views/departamento/index.php';
            } elseif ($method === 'POST') {
                // Criar departamento
                $controller->create($_POST['nome']);
                header("Location: /departamento");
            }
            break;

        case '/departamento/create':
            include '../app/views/departamento/create.php';
            break;

        case (preg_match('/^\/departamento\/edit\/(\d+)$/', $requestUri, $matches) ? true : false):
            $id = $matches[1];
            if ($method === 'GET') {
                $departamento = $controller->readOne($id);
                include '../app/views/departamento/edit.php';
            } elseif ($method === 'POST') {
                $controller->update($id, $_POST['nome']);
                header("Location: /departamento");
            }
            break;

        case (preg_match('/^\/departamento\/delete\/(\d+)$/', $requestUri, $matches) ? true : false):
            $id = $matches[1];
            $controller->delete($id);
            header("Location: /departamento");
            break;

        default:
            header("HTTP/1.0 404 Not Found");
            echo "404 Not Found";
            break;
    }
    ?><?php
    require_once '../config/database.php';
    require_once '../app/controllers/DepartamentoController.php';

    $controller = new DepartamentoController($pdo);

    // Roteamento simples
    $requestUri = explode('?', $_SERVER['REQUEST_URI'])[0];
    $method = $_SERVER['REQUEST_METHOD'];

    switch ($requestUri) {
        case '/departamento':
            if ($method === 'GET') {
                $controller->read(); // Listar departamentos
                include '../app/views/departamento/index.php';
            } elseif ($method === 'POST') {
                // Criar departamento
                $controller->create($_POST['nome']);
                header("Location: /departamento");
            }
            break;

        case '/departamento/create':
            include '../app/views/departamento/create.php';
            break;

        case (preg_match('/^\/departamento\/edit\/(\d+)$/', $requestUri, $matches) ? true : false):
            $id = $matches[1];
            if ($method === 'GET') {
                $departamento = $controller->readOne($id);
                include '../app/views/departamento/edit.php';
            } elseif ($method === 'POST') {
                $controller->update($id, $_POST['nome']);
                header("Location: /departamento");
            }
            break;

        case (preg_match('/^\/departamento\/delete\/(\d+)$/', $requestUri, $matches) ? true : false):
            $id = $matches[1];
            $controller->delete($id);
            header("Location: /departamento");
            break;

        default:
            header("HTTP/1.0 404 Not Found");
            echo "404 Not Found";
            break;
    }
    ?><?php
    require_once '../config/database.php';
    require_once '../app/controllers/DepartamentoController.php';

    $controller = new DepartamentoController($pdo);

    // Roteamento simples
    $requestUri = explode('?', $_SERVER['REQUEST_URI'])[0];
    $method = $_SERVER['REQUEST_METHOD'];

    switch ($requestUri) {
        case '/departamento':
            if ($method === 'GET') {
                $controller->read(); // Listar departamentos
                include '../app/views/departamento/index.php';
            } elseif ($method === 'POST') {
                // Criar departamento
                $controller->create($_POST['nome']);
                header("Location: /departamento");
            }
            break;

        case '/departamento/create':
            include '../app/views/departamento/create.php';
            break;

        case (preg_match('/^\/departamento\/edit\/(\d+)$/', $requestUri, $matches) ? true : false):
            $id = $matches[1];
            if ($method === 'GET') {
                $departamento = $controller->readOne($id);
                include '../app/views/departamento/edit.php';
            } elseif ($method === 'POST') {
                $controller->update($id, $_POST['nome']);
                header("Location: /departamento");
            }
            break;

        case (preg_match('/^\/departamento\/delete\/(\d+)$/', $requestUri, $matches) ? true : false):
            $id = $matches[1];
            $controller->delete($id);
            header("Location: /departamento");
            break;

        default:
            header("HTTP/1.0 404 Not Found");
            echo "404 Not Found";
            break;
    }
?>