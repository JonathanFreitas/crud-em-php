<?php

$servername = "localhost";
$username = "root";
$senha = "";
$db_namer = "crud";

$conectar = mysqli_connect($servername, $username, $senha, $db_namer);
mysqli_set_charset($conectar, "utf8");
if(mysqli_connect_error()){
    echo "Erro na conexao: ". mysqli_connect_error();
}else{
   // echo "Conectado!";
}