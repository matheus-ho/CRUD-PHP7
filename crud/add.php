<?php
//Sessão
session_start();

require_once 'db_connect.php';
function seguranca($input){
    global $connect;

    $var = mysqli_escape_string($connect, $input);
    $var = htmlspecialchars($var);
    return $var;
}


if(isset($_POST['btn-cadastrar'])):
    $nome = seguranca($_POST['nome']);
    $sobrenome = seguranca($_POST['sobrenome']);
    $email = seguranca($_POST['email']);
    $idade = seguranca($_POST['idade']);

    $sql = "INSERT INTO clientes (nome, sobrenome, email, idade) VALUES ('$nome', '$sobrenome', '$email', '$idade')";
    if(mysqli_query($connect, $sql)):
        $_SESSION['mensagem'] = "Cadastrado com sucesso!";
        header('Location:index.php?sucesso');
    else:
        $_SESSION['mensagem'] = "Erro ao cadastrar!";
        header('Location:index.php?erro');
    endif;
endif;    