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
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
<title>Globe - News</title>
<link rel="icon" href="../../Arquivos/Imagens/icon.png">
</head>
<body scroll="no">



<div class="cabecalho">
<table ><tr><td><a href="index.php" style="text-decoration:none; font-weight:bold; font-family:arial;"><font color="white">&nbsp<i class="material-icons">keyboard_arrow_left</i></td><td></a></font></td></tr></table>

</div>
<div class="login">

<div id="ordens">
<center><font size="5">
<?php
 echo"<h1>Sistema de Cadastro de Clientes</h1>";
 echo"<hr><br><br>";
 echo"<form action='inserir.php' method='POST'>";
 echo"<input name='id' type='text'size=30 placeholder='ID' class='campo' required>*<br>";
 echo"<input name='sessao' type='text'size=30 placeholder='SESSAO' class='campo' required>*<br>";
 echo"<input name='usuario' type='text'size=30 placeholder='USUARIO' class='campo' required>*<br>";
 echo"<input name='email' type='email'size=30 placeholder='EMAIL' class='campo' required>*<br>";
 echo"<input name='senha' type='text'size=30 placeholder='SENHA' class='campo' required>*<br>";
 echo"<input type='submit' value='Cadastrar' id='botao'><br>";
 echo"<a href='index.php' id='botao'>&nbsp Cancelar &nbsp</a>";
 echo"</form>";
 echo"<br><br>";




?>

</center>

</div>
  


</div>
</body>
</html>
