<html lang="PT-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="tudo.css" rel="stylesheet" type="text/css">
    <link href="./Arquivos/paginas/tudo.css" rel="stylesheet" type="text/css">
    <link rel="icon" href="Arquivos/Imagens/icon.png">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <title>Globe - News</title>
</head>
<body >
<div class="conteudo">
    <div id="titulo">NOTÍCIAS</div>
   
    <?php

    include("conexao2.php");

    $db = "SELECT * FROM noticias";
    $con= $mysqli->query($db) or die($mysqli->error);

    while($dado = $con->fetch_array()) { ?>
 <table border="1">
        <tr>
        
            <div class="noticia">
                <div class="imagem"><img src="<?php echo $dado['linkImagem'];?>" style=" width: 100%; height: 100%; object-fit: cover;"></src></div>
                
                <div class="dados">
                    <div class="titulo"><?php echo $dado['titulo'];?></div>
                    <div class="editar">
                        <a href="arquivos/paginas/editaNoticia.php?id=<?php  echo $dado['id_noticia'];?>"><i class="material-icons">create</i></a>
                        <a href="arquivos/paginas/excluirNoticia.php?id=<?php  echo $dado['id_noticia'];?>"><i class="material-icons">delete</i></a>
                    </div>
                    <div class="descricao"><?php echo $dado['descricao'];?></div>
                    <div class="infos">
                        <hr style="opacity:30%"><br>
                        <div class="autor">Autor: <?php echo $dado['autor'];?></div><div class="data">Data de Publicação: <?php echo $dado['dataC'];?></div>
                    </div> 
                </div>
            </div>
        </div>
        </tr>
    </table>
    <center><hr style="width: 70%; margin-bottom: 1%; opacity: 50%"></center>
    <?php  }  ?>
        

    <div class="criarNoticia"><a href="arquivos/paginas/cadastraNoticia.php"><img src="./Arquivos/imagens/mais.png"></img></div>
</body>
</html>    