<?php

session_start();
include('conexao.php');

$usuario = $_SESSION['usuario'];
$conexao->query("UPDATE usuarios SET sessao=0 WHERE usuario = '{$usuario}'");
$_SESSION['manter'] = 0;
session_destroy();

header('Location: index.php');
exit();