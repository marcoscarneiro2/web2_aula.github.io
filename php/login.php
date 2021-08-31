<?php
session_start();
include_once 'conexao.php';

if(empty($_POST['email']) || empty($_POST['senha'])){
    header('Location:../EntrarSistema.php');
    exit();
}

$Lemail = $_POST['email'];
$Lsenha  = $_POST['senha'];

$sql = "SELECT senha FROM cliente WHERE email = '{$Lemail}'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {

    //echo "Senha encontrada no BD" . "<br>";
  
    while($row = $result->fetch_assoc()) {
        //echo "Senha: " . $row["senha"] . "<br>";
        $hash = $row["senha"];
    }
    
    if (password_verify($Lsenha, $hash)) {
        //echo 'Senha Valida';
        $_SESSION['email'] = $Lemail;
        header('Location:../index.php');
    } else {
        //echo 'Senha Invalida';
        //$_SESSION['mensagem'] = "<div id='btms' style='background-color:red;widht:100%;color:white;text-align:center;padding:1%'>Usuário ou Senha Incorretos</div>";
        $_SESSION['nao_autenticado'] = true;
        header('Location:../EntrarSistema.php');
    }
} else {
    echo "<br>" . "Erro senha não encontrada: " . "<br>" . $sql . "<br>" . $conn->error;
}
?>