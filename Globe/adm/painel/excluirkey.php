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
<html>
<head>
</head>
<body>
<?php

include "conexao3.php";

$chave=$_GET['code'];


$user = "DELETE FROM chaves WHERE chave='$chave'";
$resultado_usuario = mysqli_query($conn, $user);


echo"<META HTTP-EQUIV=REFRESH CONTENT = '0;URL=listakeys.php'>
            <script type = \"text/javascript\">
            alert (\"Dados apagados com Sucesso!\");
            </script>";




?>

</body>
</html>
