<?php
require_once "controller.php";
require_once "view.php";
require_once "model/cliente.php";
require_once "model/fornecedor.php";

// https://www.youtube.com/watch?v=vvS7JgEcmic
//http://localhost:3000/mvcSimple/index.php?modulo=Cliente&action=one&id=1
//http://localhost:3000/mvcSimple/index.php?modulo=Cliente&action=all
$app = new Controller();
