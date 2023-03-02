<?php
session_start();
include('conexao.php');
if(isset($_POST['manterconnectado'])){
	$_SESSION['manter'] = 1;
}else{
	$_SESSION['manter'] = 0;
}
if(empty($_POST['email']) || empty($_POST['senha'])) {
	header('Location: index.php');
	exit();
}
$email = mysqli_real_escape_string($conexao, $_POST['email']);
$senha = mysqli_real_escape_string($conexao, $_POST['senha']);

$query = "select email from usuarios where email = '{$email}' and senha = md5('{$senha}')";	

$result = mysqli_query($conexao, $query);

$row = mysqli_num_rows($result);


$consulta = "SELECT	* FROM usuarios where email = '$email'";
$con = $conexao->query($consulta) or die($conexao->error);

while($dado = $con -> fetch_array()){

	$usuario = $dado['usuario'];
	$sessao = $dado['sessao'];
}


ECHO"$manter";
if($sessao == 0){


if($row == 1){

	
		$_SESSION['usuario'] = $usuario;
			$conexao->query("UPDATE usuarios SET sessao=1 WHERE email = '{$email}'");
			$logado = 1;
			if($_SESSION['usuario'] == 'Lohran'){ header('Location: paineladm-pag.php?link=1'); exit();}
			else{header('Location: painel-pag.php?link=1'); exit();}
		
} 
else {
	$_SESSION['nao_autenticado'] = true;
	header('Location: index.php');
	exit();
}
}else{

	$_SESSION['existe'] = true;
	header('Location: index.php');
	exit();

}
