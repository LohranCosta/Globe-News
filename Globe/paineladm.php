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
<!doctype html>

<html lang="pt-br">
<head>
  <meta charset="utf-8">

  <title>Biblioteca - 2.0</title>
  <link rel="shortcut icon" href="Arquivos/Imagens/icon.png" type="image/png">
  <link rel="stylesheet" href="painel.css">
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link rel="stylesheet" href="devices.min.css" type="text/css">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css">

</head>

<body>
    
<div class="cabecalho">
        <div id="usuario"><span><i class="large material-icons">person</i></span>
        <div id="usuario-content">
        <div class="info">
        <center> <img src="Arquivos/Imagens/user.png" style="width: 100px; height: auto;">
        <h1><?php echo $_SESSION['usuario'];?></h1></center>
        </div>
        <a href="logout.php"><div id="sair">
            <center><TABLE>
                <tr><td></td><td><img src="Arquivos/Imagens/sair.png" width="10px" ></td></tr></table></center>
                   
            </div></a>
            
        </div>
    </div> 
</div>




<input type="checkbox" id="check">
<label id="incone" for="check"><img src="Arquivos/Imagens/menu.png"></label>
<div class="dash" >
    <label id="incone" for="check"><img src="Arquivos/Imagens/exit.png"></label>
    <ul id="nav" >
	<table border=1>
	<br><br><br>
		<li><a href="paineladm-pag.php?link=1"><i class="material-icons">whatshot</i><p>Painel</p></a></li>
        <li><a href="adm/painel"><i class="material-icons">build</i><p>Configurações</p></a></li>
    </ul>
    </table>
</div>
</body>
</html>