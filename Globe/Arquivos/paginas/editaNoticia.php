<?php
    
    include('conexao.php');
    session_start();
    if (!isset($_SESSION['usuario'])) {
        header("location: error.html");
        die();
    } else if ($_SESSION['usuario'] !== "Lohran") {
        header("location: error.html");
        die();
    }
?>

<html lang="PT-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="editaNoticia.css" rel="stylesheet" type="text/css">
    <link rel="icon" href="Arquivos/Imagens/icon.png">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <title>Globe - News</title>
</head>
<body >
<div class="conteudo">
    <div id="titulo">EDITAR NOTÍCIA</div>
   
    <?php

    include("conexao2.php");
    $id=$_GET['id'];
    $db = "SELECT * FROM noticias where id_noticia='{$id}'";
    $con= $mysqli->query($db) or die($mysqli->error);

    while($dado = $con->fetch_array()) { 

    $id_noticia=$dado['id_noticia'];
    $linkImagem=$dado['linkImagem'];
    $titulo=$dado['titulo'];
    $descricao=$dado['descricao'];
    $autor=$dado['autor'];
    $dataC=$dado['dataC'];

echo"
 <table border='1'>
    <form action='alterar_bd.php?id=$id' method='POST'>
                <tr>
                    <div class='noticia'>

                        <div class='imagem'><input type='imagem' name='linkImagem_novo' class='campoImagem' value='$linkImagem'></div>
                        <div class='dados'>
                        <div class='titulo'><input type='text' name='titulo_novo' class='campoTitulo' value='$titulo'></div>
                        <div class='editar'>
                        <input type='submit' value='Salvar' class='botao'>
                        <a class='link2' href='../../paineladm-pag.php?link=1'><i class='material-icons'>close</i></a>

                        

                    </div>
                            <div class='descricao'><input type='text' name='descricao_novo' class='campoDescricao' value='$descricao'></div>
                            <div class='infos'>
                                <hr style='opacity:30%'><br>
                                <div class='autor'>Autor: <input type='text' name='autor_novo' class='campoAutor' value='$autor'></div><div class='data'>Data de Publicação: <input type='text' name='dataC_novo' class='campoData' value='$dataC'></div>
                            </div> 
                        </div>
                    </div>
                </div>
            </tr>
    </form>
    </table>
    <center><hr style='width: 70%; margin-bottom: 1%; opacity: 50%'></center>
 ";}?>


</body>
</html>