<?php
    session_start();	
	include_once 'conexao.php';

    $CNome=$_POST['nome'];
	$CEmail=$_POST['email'];
	$CSenha=$_POST['senha'];

    $sql = "insert into cliente (id,nome,email,senha) values(null,'".$CNome."','".$CEmail."','".$CSenha."')";
    $inserir = mysqli_query($con, $sql);

    if($inserir){
        $_SESSION['mensagem'] ="Usuário cadastrado com sucesso!!"; 
           header("location:index.php");
    }
    else{
        $_SESSION['mensagem'] ="Usuário não foi cadastrado!!"; 
        header("location:cadastrar.php");
    }
	
   
?>