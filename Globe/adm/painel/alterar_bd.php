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

  
  $id=$_POST['id_novo'];
  $login=$_POST['login_novo'];
  $usuario=$_POST['usuario_novo'];
  $email=$_POST['email_novo'];
  $senha=$_POST['senha_novo'];


  $pass = substr(md5("$senha"),0,32);//GERAR SENHA MD5

  
  $conexao->query("UPDATE usuarios SET id='$id',sessao='$login',usuario='$usuario',senha='$pass',email='$email' WHERE id='{$id}'");
  
  echo"<META HTTP-EQUIV=REFRESH CONTENT = '0;URL=index.php'>
            <script type = \"text/javascript\">
            alert (\"Dados Alterados\");
            </script>";
  
?>

