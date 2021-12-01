<?php
//criar variáveis de conexão
$servidor = "localhost";
$user = "root";
$senha = "";
$bd = "bdcurso";

//criar a conexão
//mysqli_connect(SERVIDOR,USUARIO,SENHA,BD);
//o mysqli_connect retorna TRUE ou FALSE

$con = mysqli_connect($servidor,$usuario,$senha,$bd); 

//var_dump($con);
if ($con) { //verifica se a $conn tem TRUE
  echo "Conectou ao BD";
} else {
    echo "<h1>Falha de conexão com o BD - Contacte o juan</h1>";
}