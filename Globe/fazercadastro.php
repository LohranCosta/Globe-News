<?php
    session_start();
    include('conexao.php');
    include('conexao2.php');

    $usuario=$_POST['usuario'];
    $email=$_POST['email'];
    $senha=$_POST['senha'];
    $senhaconfirma=$_POST['senhaconfirma'];
    $sessao = 0;

    if($senha != $senhaconfirma){
        $_SESSION['senhadiferente'] = true;
        header('Location: cadastra.php');
        exit();
    }else{
        $asenha = substr(md5("$senhaconfirma"),0,32);//GERAR SENHA MD5
    }   

    //VENDO SE JA EXISTE ESSE EMAIL


    $query = "select email from usuarios where email = '{$email}'";	
    $result = mysqli_query($conexao, $query);
    $row = mysqli_num_rows($result);
    echo"$row";
    
    if($row > 0){
        $_SESSION['existente'] = true;
        header('Location: cadastra.php');
        exit();
    }else{
   
 $resul=$mysqli->query("INSERT INTO `usuarios` (`sessao`, `usuario`, `email`, `senha`) VALUES ('{$sessao}', '{$usuario}', '{$email}', '{$asenha}')");

   
    echo"<META HTTP-EQUIV=REFRESH CONTENT = '0;URL=index.php'>
    <script type = \'text/javascript\'>
    alert (\'Dados cadastrados com Sucesso!\');
    </script>";

}    
?>
