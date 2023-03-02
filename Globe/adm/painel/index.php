<?php
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
<link href="painel.css" rel="stylesheet" type="text/css">
<link href="https://fonts.googleapis.com/css?family=Londrina+Solid&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
<title>Globe - News</title>
<link rel="icon" href="../../Arquivos/Imagens/icon.png">
</head>
<body scroll="no">



<div class="cabecalho">
    <table >
<tr><td><a href="../../paineladm-pag.php?link=1" style="text-decoration:none; font-weight:bold; font-family:arial;"><font color="white">&nbsp<i class="material-icons">home</i></td><td></a></font></td></tr></table>
<div class="info">
        <center> <img src="../../Arquivos/Imagens/icon.png" style="width: 100px; height: 100px; margin-top: 0px"></center>
        </div>


</div>
<div class="login">


<div id="ordens">
<br><br>
<table border="0">

<tr><td width="2%"><center>ID</td><td width="2%"><center>LOGIN</td><td width="5%"><center>USUARIO</td>
<td width="10%"><center>EMAIL</td><td width="5%"><center>SENHA</td><td width="9%" rowspan="1" align="right">AÇÃO</td ><td></td>
</tr>

<?php

include("conexao2.php");

$db = "SELECT * FROM usuarios";
$con= $mysqli->query($db) or die($mysqli->error);

while($dado = $con->fetch_array()) { ?>

      <tr><td><hr></td><td><hr></td><td><hr></td><td><hr></td><td><hr></td><td><hr></td><td><hr></td></tr>
      <tr>

      <td width='2%'><center><?php echo $dado['id'];?></center></td>
      <td width='2%'><center><?php echo $dado['sessao'];?></center></td>
      <td width='5%'><center><?php echo $dado['usuario'];?></center></td>
      <td width='10%'><center><?php echo $dado['email'];?></center></td>
      <td width='5%'><center><?php echo $dado['senha'];?></center></td>
      <td width='5%'><center><a href="alterar2.php?id=<?php  echo $dado['id'];?>">  <i class="material-icons">create</i></a></center></td>
      <td width='5%'><center><a href="excluir.php?id=<?php  echo $dado['id'];?>">  <i class="material-icons">delete</i></a></center></td>
      
      </tr>
        

<?php  }  ?>

</table>
<hr>
<br>
<a href="Cadastra.php">  <i class="material-icons">group_add</i></a>
<a href="Key.php">  <i class="material-icons">verified_user</i></a>
</div>
  


</div>
</body>
</html>



