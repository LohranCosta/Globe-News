<?php
include('verifica_login.php');
?>
<!doctype html>

<html lang="pt-br">
<head>
  <meta charset="utf-8">

  <title>Globe - News</title>
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


<?php
                $link=$_GET["link"];
				
				$pag[1]="./Arquivos/paginas/tudo2.php";
            
				


                
                if(!empty($link))
                {
                if(file_exists($pag[$link])) {
                include $pag[$link];
                
                }
                else{
                 include "painel.php";
                }
                 } else{
                 include "painel.php";
                 }
?>

</body>
</html>