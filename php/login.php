<?php
session_start();
include_once 'conexao.php';

if(empty($_POST['email']) || empty($_POST['senha'])){
    header('Location:../EntrarSistema.php');
    exit();
}
$id_banco ;
$nome_banco;
$email = $_POST['email'];
$senha = $_POST['senha'];

$sql = "SELECT id, nome, email, senha FROM cliente WHERE email = '{$email}'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        $hash = $row["senha"];
        $id_banco = $row["id"];
        $nome_banco = $row["nome"];
        
    }
    
    if (password_verify($senha, $hash)) {

        $_SESSION['email'] = $email;
        $_SESSION['senha'] = $senha;
        $_SESSION['nome'] =$nome_banco;
        $_SESSION['id'] = $id_banco;
        header('Location:../index.php');

    } else {
        $_SESSION['nao_autenticado'] = true;
        $_SESSION['mensagem'] = "<div id='btms' style='background-color:red;widht:100%;color:white;text-align:center;padding:1%'>Senha inválida!!</div>";
        header('Location:../EntrarSistema.php');
    }
} else {
    $_SESSION['mensagem'] = "<div id='btms' style='background-color:#DAA520;widht:100%;color:white;text-align:center;padding:1%'>Conta não encontrada!!</div>";
    header('Location:../EntrarSistema.php');
}
?>