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
<tr><td><a href="key.php" style="text-decoration:none; font-weight:bold; font-family:arial;"><font color="white">&nbsp<i class="material-icons">keyboard_arrow_left</i></td><td></a></font></td></tr></table>
<div class="info">
        <center> <img src="../../Arquivos/Imagens/icon.png" height="50px"></center>
        </div>


</div>
<div class="login">


<div id="ordens">
<br><br>
<center>
<table border="0">

<tr><td width="70%"><center>KEY</td><td width="30%"><center>AÇÃO</td></tr><hr>

<?php

include("conexao2.php");

$db = "SELECT * FROM chaves";
$con= $mysqli->query($db) or die($mysqli->error);

while($dado = $con->fetch_array()) { ?>



      <td width='2%'><center><?php echo $dado['chave'];?></center><hr></td>

     
      <td width='5%'><center><a href="excluirkey.php?code=<?php  echo $dado['chave'];?>">  <i class="material-icons">delete</i></a></center></td>
      </tr>
     
<?php  }  ?>

</table>


</div>
  


</div>
</body>
</html>



