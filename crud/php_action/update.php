<?php
session_start();
require_once 'db_conexao.php';

if(isset($_POST['btn-editar'])){
    $nome1 = mysqli_escape_string($conectar, $_POST['nome']);
    $sobrenome1 = mysqli_escape_string($conectar, $_POST['sobrenome']);
    $email1 = mysqli_escape_string($conectar, $_POST['email']);
    $idade1 = mysqli_escape_string($conectar, $_POST['idade']);
    
    $id1 = mysqli_escape_string($conectar, $_POST['id']);
    
    $sql ="update clientes set nome = '$nome1', sobrenome = '$sobrenome1', email = '$email1'"
            . ", idade = '$idade1' where id = '$id1'";
    if(mysqli_query($conectar, $sql)){
        $_SESSION['mensagem1'] = "editado com sucesso!";
        header('Location: ../index.php');
    }else{
        $_SESSION['mensagem1'] = "Erro ao editar!";
        header('Location: ../index.php');
    }
}