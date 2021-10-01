<?php
include_once 'conexao.php';
session_start();
$email = $_SESSION['email'];

$id = filter_input(INPUT_POST, 'id', FILTER_SANITIZE_NUMBER_INT);
$nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_STRING);
$senha = filter_input(INPUT_POST, 'senha', FILTER_SANITIZE_STRING);
$email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);        

    $sql = "UPDATE cliente SET nome = '$nome', senha = '$senha', email = '$email' WHERE id = '$id'";

    $result = mysqli_query($conn, $sql) or die(mysqli_error($conn));

$row = mysqli_affected_rows($conn);  
if( $row == 1){
    $_SESSION['mensagem'] = "<div id='btms' style='background-color:green;widht:100%;color:white;text-align:center;padding:1%'>Usuário alterado com sucesso!!</div>";
    clearstatcache();
    header("location:../index.php");
}else{
    $_SESSION['mensagem'] = "<div id='btms' style='background-color:red;widht:100%;color:white;text-align:center;padding:1%'>Usuário não foi alterado!!</div>";
		header("location:../index.php");
}