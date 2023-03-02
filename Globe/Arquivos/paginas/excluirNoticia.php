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

$id=$_GET['id'];


$user = "DELETE FROM noticias WHERE id_noticia='$id'";
$resultado_usuario = mysqli_query($conn, $user);


echo"<META HTTP-EQUIV=REFRESH CONTENT = '0;URL=../../paineladm-pag.php?link=1'>
    <script type = \"text/javascript\">
    alert (\"Dados Excluidos\");
</script>";




?>

</body>
</html>
