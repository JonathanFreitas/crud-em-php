<?php
session_start();
require_once 'db_conexao.php';

if(isset($_POST['btn-deletar'])){
      
    $id1 = mysqli_escape_string($conectar, $_POST['id']);
    
    $sql ="delete from clientes where id = '$id1'";
    if(mysqli_query($conectar, $sql)){
        $_SESSION['mensagem1'] = "Deletado com sucesso!";
        header('Location: ../index.php');
    }else{
        $_SESSION['mensagem1'] = "Erro ao deletar!";
        header('Location: ../index.php');
    }
}
