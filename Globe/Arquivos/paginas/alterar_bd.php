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

  
  $id=$_GET['id'];
  $linkImagem=$_POST['linkImagem_novo'];
  $titulo=$_POST['titulo_novo'];
  $descricao=$_POST['descricao_novo'];
  $autor=$_POST['autor_novo'];
  $dataC=$_POST['dataC_novo'];

  
  $conexao->query("UPDATE noticias SET linkImagem='$linkImagem',titulo='$titulo',descricao='$descricao',autor='$autor',dataC='$dataC' WHERE id_noticia='{$id}'");
  
  echo"<META HTTP-EQUIV=REFRESH CONTENT = '0;URL=../../paineladm-pag.php?link=1'>
            <script type = \"text/javascript\">
            alert (\"Dados Alterados\");
            </script>";
  
?>

