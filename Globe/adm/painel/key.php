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

<html lang="PT-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="tudo.css" rel="stylesheet" type="text/css">
    <link rel="icon" href="../../Arquivos/Imagens/icon.png">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <title>Globe - News</title>
</head>
<body >
    
<div class="conteudo">
<table >
<tr><td><a href="index.php" style="text-decoration:none; font-weight:bold; font-family:arial;"><font color="white">&nbsp<i class="material-icons">home</i></td><td></a></font></td></tr></table>

<div id="titulo">KEYS</div>
<br><br><a href="listakeys.php" style="text-decoration:none;color:#ffffff;">LISTAR</a>


<div id="professor">PROFESSOR<br>
<center>
<div id="key">
<?php
$chars = array(0,1,2,3,4,5,6,7,8,9,'A','B','C','D','E','F','G','H','I','J','K','L','M','N','O','P','Q','R','S','T','U','V','W','X','Y','Z');
$serialp = '';
$max = count($chars)-1;
for($i=0;$i<20;$i++){
    $serialp .= (!($i % 5) && $i ? '-' : '').$chars[rand(0, $max)];
}
echo 'P';echo $serialp;
?>
</div><br>
<a href="cserial.php?code=<?php echo'P';echo $serialp;?>">VALIDAR</a>

</center>

</div>


<div id="funcionario"> FUNCIONARIO<br>
<center>

<div id="key">
<?php
$chars = array(0,1,2,3,4,5,6,7,8,9,'A','B','C','D','E','F','G','H','I','J','K','L','M','N','O','P','Q','R','S','T','U','V','W','X','Y','Z');
$serialf = '';
$max = count($chars)-1;
for($i=0;$i<20;$i++){
    $serialf .= (!($i % 5) && $i ? '-' : '').$chars[rand(0, $max)];
}
echo'F';echo $serialf;
?>
</div><br>
<a href="cserial.php?code=<?php echo'F';echo $serialf;?>">VALIDAR</a>

</center>
</div>
</div>


</body>
</html>



<?php
$chars = array(0,1,2,3,4,5,6,7,8,9,'A','B','C','D','E','F','G','H','I','J','K','L','M','N','O','P','Q','R','S','T','U','V','W','X','Y','Z');
$serial = '';
$max = count($chars)-1;
for($i=0;$i<20;$i++){
    $serial .= (!($i % 5) && $i ? '-' : '').$chars[rand(0, $max)];
}
echo $serial;
?>