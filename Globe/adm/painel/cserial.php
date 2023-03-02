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

    $codiguin=$_GET["code"];
    $resul=$mysqli->query("INSERT INTO `chaves` (`chave`) VALUES ('{$codiguin}')");

   
    echo"<META HTTP-EQUIV=REFRESH CONTENT = '0;URL=index.php'>
    <script type = \'text/javascript\'>
    alert (\'Dados cadastrados com Sucesso!\');
    </script>";
?>







