<?php
include_once 'conexao.php';
session_start();
$email = $_SESSION['email'];

$ID_usuario = $_SESSION['ID_usuario'];
$telefone = $_POST['telefone'];
$celular = $_POST['celular'];
$rua = $_POST['rua'];
$bairro = $_POST['bairro'];
$estado = $_POST['estado'];
 

    $sql = "UPDATE candidato SET telefone = '$telefone', rua = '$rua', bairro = '$bairro',estado = '$estado' WHERE idUsuario = '$ID_usuario'";
    
    $result = $conn->query($sql);

if( $result->num_rows > 0){
    $_SESSION['mensagem'] = "<div id='btms' style='background-color:green;widht:100%;color:white;text-align:center;padding:1%'>Usuário alterado com sucesso!!</div>";
    clearstatcache();
    header("location:../../view/Telaperfil.php");
}else{
    $_SESSION['mensagem'] = "<div id='btms' style='background-color:red;widht:100%;color:white;text-align:center;padding:1%'>Usuário não foi alterado!!</div>";
		header("location:../../view/alterar_Cadastro.php?ID_usuario=<?= $_SESSION[ID_usuario] ?>");
}