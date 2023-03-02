<?php

    session_start();
    if (!isset($_SESSION['usuario'])) {
        header("location: error.html");
        die();
    } else if ($_SESSION['usuario'] !== "Lohran") {
        header("location: error.html");
        die();
    }
    include('conexao.php');
    include('conexao2.php');

    $id=$_POST['id'];
    $sessao=$_POST['sessao'];
    $usuario=$_POST['usuario'];
    $email=$_POST['email'];
    $senha=$_POST['senha'];


    $pass = substr(md5("$senha"),0,32);//GERAR SENHA MD5


    $resul=$mysqli->query("INSERT INTO `usuarios` (`sessao`, `id`, `usuario`, `email`, `senha`) VALUES ('{$sessao}', '{$id}', '{$usuario}', '{$email}', '{$pass}')");

   
    echo"<META HTTP-EQUIV=REFRESH CONTENT = '0;URL=index.php'>
    <script type = \'text/javascript\'>
    alert (\'Dados cadastrados com Sucesso!\');
    </script>";
?>
