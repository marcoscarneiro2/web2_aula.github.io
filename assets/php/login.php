<?php
session_start();
include_once 'conexao.php';

if(empty($_POST['email']) || empty($_POST['senha'])){
    header('Location:../EntrarSistema.php');
    exit();
}
$nome_banco;
$nivel;
$email = $_POST['email'];
$senha = $_POST['senha'];

$sql = "SELECT id_usuario, nome, email, senha,nivel FROM usuario WHERE email = '{$email}' and senha = md5('{$senha}')";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        $hash = $row["senha"];
        $id_banco = $row["id_usuario"];
        $nome_banco = $row["nome"];
        $nivel = $row["nivel"];
        
    }
    
    if ($sql == True) {

        $_SESSION['email'] = $email;
        $_SESSION['senha'] = $senha;
        $_SESSION['nome'] =$nome_banco;
        $_SESSION['nivel'] =$nivel;
        $_SESSION['id_usuario'] = $id_banco;
        header('Location:../index.php');

    } else {
        $_SESSION['nao_autenticado'] = true;
        $_SESSION['mensagem'] = "<div id='btms' style='background-color:red;widht:100%;color:white;text-align:center;padding:1%'>Senha inválida!!</div>";
        header('Location:../../view/EntrarSistema.php');
    }
} else {
    $_SESSION['mensagem'] = "<div id='btms' style='background-color:#DAA520;widht:100%;color:white;text-align:center;padding:1%'>Usuário ou senha incorretos!!</div>";
    header('Location:../../view/EntrarSistema.php');
}
?>