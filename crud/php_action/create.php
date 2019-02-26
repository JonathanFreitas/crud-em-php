<?php
session_start();
require_once 'db_conexao.php';

if(isset($_POST['btn-cadastrar'])){
    $nome1 = mysqli_escape_string($conectar, $_POST['nome']);
    $sobrenome1 = mysqli_escape_string($conectar, $_POST['sobrenome']);
    $email1 = mysqli_escape_string($conectar, $_POST['email']);
    $idade1 = mysqli_escape_string($conectar, $_POST['idade']);
    
    $sql ="insert into clientes (nome, sobrenome, email, idade) values "
            . "('$nome1', '$sobrenome1', '$email1', '$idade1')";
    if(mysqli_query($conectar, $sql)){
        $_SESSION['mensagem1'] = "cadastrado com sucesso!";
        header('Location: ../index.php');
    }else{
        $_SESSION['mensagem1'] = "Erro ao cadastrar!";
        header('Location: ../index.php');
    }
}