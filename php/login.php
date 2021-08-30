<?php
session_start();
include_once 'conexao.php';

if(empty($_POST['email']) || empty($_POST['senha'])){
    header('Location:../EntrarSistema.php');
    exit();
}

$Lemail = mysqli_real_escape_string($conn, $_POST['email']);
$Lsenha = mysqli_real_escape_string($conn, $_POST['senha']);

$query = "SELECT email FROM cliente WHERE email = '{$Lemail}' AND senha = md5('{$Lsenha}')";

$result = mysqli_query($conn,$query);

$numrow = mysqli_num_rows($result);

if($numrow == 1){      
    $_SESSION['email'] = $Lemail;
    header('Location:../index.php');
    exit();
}else{
    $_SESSION['nao_autenticado'] = true;
    header('Location:../EntrarSistema.php');
    exit();
}

?>