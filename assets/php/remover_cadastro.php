<?php
include_once 'conexao.php';
session_start();
$id = $_SESSION['id_usuario'];

$sql = "DELETE from usuario where id_usuario = '".$id."' ";
$result = mysqli_query($conn, $sql) or die(mysqli_error($conn));
$row = mysqli_affected_rows($conn);

if( $row == 1){
    $_SESSION['mensagem'] = "<div id='btms' style='background-color:green;widht:100%;color:white;text-align:center;padding:1%'>Usuário deletado com sucesso!!</div>";
		header("location:../index.php");
        session_destroy();
}else{
    $_SESSION['mensagem'] = "<div id='btms' style='background-color:red;widht:100%;color:white;text-align:center;padding:1%'>Usuário não foi deletado!!</div>";
		header("location:../index.php");
}

?>