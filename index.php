<?php
require_once "./controladores/Controlador.php";
session_start();
$controlador = new Controlador();
$controlador->main();

?>