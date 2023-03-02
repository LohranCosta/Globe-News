<?php

$host = "localhost";
$usuario= "root";
$senha = "";
$bd=@mysql_connect($host,$usuario,$senha) or die ("Não foi possível
conectar com o servidor de banco de dados");
mysql_select_db("globe",$db) or die ("Não foi possívelconectar com o banco de dados");

?>




