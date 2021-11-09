<?php
include_once 'conexao.php';
session_start();

$id = $_GET["id_produto"];


$sql = "DELETE FROM produto WHERE id_produto = '".$id."' ";
$result = mysqli_query($conn, $sql) or die(mysqli_error($conn));
$row = mysqli_affected_rows($conn);

if( $row == 1){
    $_SESSION['mensagem'] = "<div id='btms' style='background-color:green;widht:100%;color:white;text-align:center;padding:1%'>Produto deletado com sucesso!!</div>";
		header("location:../Telaperfil.php");
}else{
    $_SESSION['mensagem'] = "<div id='btms' style='background-color:red;widht:100%;color:white;text-align:center;padding:1%'>Produto não foi deletado!!</div>";
		header("location:../Telaperfil.php");
}

?>