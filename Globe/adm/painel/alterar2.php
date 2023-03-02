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
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<link href="index.css" rel="stylesheet" type="text/css">
<link href="https://fonts.googleapis.com/css?family=Londrina+Solid&display=swap" rel="stylesheet">
<link rel="icon" href="../../Arquivos/Imagens/icon.png">
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
<title>Mafia Carding</title>
</head>
<body scroll="no">



<div class="cabecalho">
<table ><tr><td><a href="index.php" style="text-decoration:none; font-weight:bold; font-family:arial;"><font color="white">&nbsp<i class="material-icons">keyboard_arrow_left</i></td><td></a></font></td></tr></table>
<div class="info">
        <center> <img src="../../Arquivos/Imagens/icon.png"></center>
        </div>


</div>
<div class="login">

<div id="ordens">
  <center>
<?php


include("conexao2.php");
$id=$_GET['id'];
$db = "SELECT * FROM usuarios where id='{$id}'";
$con= $mysqli->query($db) or die($mysqli->error);


while($dado = $con->fetch_array()) { 


  $id=$dado['id'];
  $login=$dado['sessao'];
  $usuario=$dado['usuario'];
  $email=$dado['email'];
  $senha=$dado['senha'];

  
        echo"
        <div class='formulario'>
         <form action='alterar_bd.php?id_novo=$id' method='POST'>
         <br><br><br><br><h1>Informações</h1> <br><br>

        <div class='txtb'>
           <input type='text' name='id_novo' class='campo' value='$id'>

        </div>

        <div class='txtb'>
         <input type='text' name='login_novo' class='campo' value='$login'>

      </div>

      <div class='txtb'>
       <input type='text' name='usuario_novo'  class='campo'value='$usuario'>

    </div>
      <div class='txtb'>
       <input type='text' name='email_novo' class='campo' value='$email'>

    </div>

    <div class='txtb'>
    <input type='text' name='senha_novo' class='campo' value='$senha'>

  </div>

        <input type='submit' value='Alterar' id='botao'><br>
        <a href='index.php' id='botao'>&nbsp Cancelar &nbsp</a>

        </form>
        </div>

";    
  }
?>
</center>

</div>
  


</div>
</body>
</html>


