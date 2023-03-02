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


    $linkImagem=$_POST['linkImagem_novo'];
    $titulo=$_POST['titulo_novo'];
    $descricao=$_POST['descricao_novo'];
    $autor=$_POST['autor_novo'];
    $dataC=$_POST['dataC_novo'];


    $resul=$mysqli->query("INSERT INTO `noticias` (`titulo`, `descricao`, `autor`, `dataC`, `linkImagem`) VALUES ('{$titulo}', '{$descricao}', '{$autor}', '{$dataC}', '{$linkImagem}')");

   
    echo"<META HTTP-EQUIV=REFRESH CONTENT = '0;URL=../../paineladm-pag.php?link=1'>
    <script type = \"text/javascript\">
    alert (\"Dados Cadastrados\");
    </script>";
?>
