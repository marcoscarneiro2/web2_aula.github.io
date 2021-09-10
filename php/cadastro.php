<?php
session_start();
include_once 'conexao.php';

$CNome = htmlspecialchars($_POST["nome"]);
$CEmail = $_POST['email'];
$CSenha = password_hash($_POST['senha'], PASSWORD_DEFAULT);


// Checar se existem campos vazios
if (empty($CNome) || empty($CEmail) || empty($CSenha)) {

	$_SESSION['mensagem'] = "<div id='btms' style='background-color:#DAA520;widht:100%;color:white;text-align:center;padding:1%'>Preencha os campos!</div>";
	header("location:../cadastrar.php");
} else {

	$sql = "INSERT INTO cliente (nome,email,senha) VALUES ('".$CNome."','".$CEmail."','".$CSenha."')";

	if ($conn->query($sql) === TRUE) {
		//echo "Novo registro criado com sucesso";
		$_SESSION['mensagem'] = "<div id='btms' style='background-color:green;widht:100%;color:white;text-align:center;padding:1%'>Usuário cadastrado com sucesso!!</div>";
		header("location:../index.php");
	} else {
		//echo "Error: " . $sql . "<br>" . $conn->error;
		$_SESSION['mensagem'] = "<div id='btms' style='background-color:red;widht:100%;color:white;text-align:center;padding:1%'>Usuário não foi cadastrado!!</div>";
		header("location:../cadastrar.php");
	}

	$conn->close();
}
?>