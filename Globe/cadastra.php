<?php
session_start();
?>

<html lang="PT-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="style2.css" rel="stylesheet" type="text/css">
    <link rel="icon" href="Arquivos/Imagens/icon.png">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <title>Globe - News</title>
</head>
<body>


<div class="box">
<table><tr><td><a href="index.php" style="text-decoration:none; font-weight:bold; font-family:arial;"><font color="white">&nbsp<i class="material-icons" style="background-image: linear-gradient(to bottom right, #ff9200, #ff02ff); color: black; background-clip: text;-webkit-background-clip: text; -webkit-text-fill-color: transparent;">chevron_left</i></td></tr></table>
    <div id="formulario">
    
        <div id="coleta"> 
            
        <CENTER><H1><font color="white" size="20px">CADASTRAR</font></H1></CENTER><br><br>


                <?php
                if(isset($_SESSION['senhadiferente'])):
                ?>
                <center><h3>Senhas Não Conferem!</h3></center>
                <?php
                endif;
                unset($_SESSION['senhadiferente']);
                ?>

                <?php
                if(isset($_SESSION['existente'])):
                ?>
                <center><h3>Email já cadastrado!</h3></center>
                <?php
                endif;
                unset($_SESSION['existente']);
                ?>



    <form method="POST" action="fazercadastro.php">
                <h1>NOME</h1>
                <input type="text" name="usuario" id="campo" required><br><br>
                <h1>EMAIL</h1>
                <input type="email" name="email" id="campo" required><br><br>
                <h1>SENHA</h1>
                <input type="password" name="senha" id="campo" required><br><br>
                <h1>CONFIRMAR SENHA</h1>
                <input type="password" name="senhaconfirma" id="campo" required><br><br>
               
                <input type="submit" value="CADASTRAR" id="botao">
            </form>

            <table border=0>
                <tr><td rolspan=1></td><td><h2>Cadastro especial <a href="cadastrapf.php" style="background-image: linear-gradient(to bottom right, #ff9200, #ff02ff); color: black; background-clip: text;-webkit-background-clip: text; -webkit-text-fill-color: transparent;text-decoration:none;">aqui</font></a></h2></td></tr>
                </table><br>
        </div>    
    </div>
</div>
 
</body>
</html>
