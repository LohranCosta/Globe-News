<?php
session_start();
if($_SESSION['manter'] = 1){

    if(empty($_SESSION['usuario'])){
        $_SESSION['manter'] = 0;
    }else{
        if($_SESSION['usuario'] == 'Lohran'){ header('Location: paineladm-pag.php?link=1'); exit();}
		else{header('Location: painel-pag.php?link=1'); exit();}

    }
}
    

?>

<html lang="PT-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="style2.css" rel="stylesheet" type="text/css">
    <link rel="icon" href="Arquivos/Imagens/icon.png">
    <title>Globe - News</title>
</head>
<body>
<div class="box">
    <div id="formulario">
       
        <div id="coleta"><center> <img src="Arquivos/Imagens/icon.png"></center><br>
                <?php
                if(isset($_SESSION['nao_autenticado'])):
                ?>
                <center><h3>Usuario Inexistente</h3></center>
                <?php
                endif;
                unset($_SESSION['nao_autenticado']);
                ?>

                <?php
                if(isset($_SESSION['existe'])):
                ?>
                <center><h3>Usuario já conectado</h3></center>
                <?php
                endif;
                unset($_SESSION['existe']);
                ?>

              

            <form method="POST" action="valida.php">
                <h1>EMAIL</h1>
                <input type="text" name="email" id="campo" required><br><br>
                <h1>SENHA</h1>
                <input type="password" name="senha" id="campo" required><br><br>
                <table border=0>
                <tr><td><input type="checkbox" name="manterconnectado" id="checkboxG4" class="css-checkbox" value="1"/><label for="checkboxG4" class="css-label"></label></td>
                <td><h2>MANTER CONECTADO</h2></td><tr>
                <tr><td rolspan=1></td><td><h2>Não tem cadastro? <a href="cadastra.php" style="background-image: linear-gradient(to bottom right, #ff9200, #ff02ff); color: black; background-clip: text;-webkit-background-clip: text; -webkit-text-fill-color: transparent;">Cadastre-se</font></a></h2></td></tr>
                </table><br>
                <input type="submit" value="ENTRAR" id="botao">
            </form>
        </div>    
    </div>
</div>
 
</body>
</html>
