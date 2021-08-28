<?php
session_start();
include_once 'conexao.php';

$CNome = htmlspecialchars($_POST["nome"]);
$CEmail = $_POST['email'];
$CSenha = password_hash($_POST['senha'], PASSWORD_DEFAULT);;
$CID = rand(5, 15);

// Chegar se existem campos vazios
if (empty($CNome) || empty($CEmail) || empty($CSenha)) {

	echo "Campos Vazios";

} else {

	$sql = "INSERT INTO cliente (id,nome,email,senha) VALUES ('".$CID."','".$CNome."','".$CEmail."','".$CSenha."')";

	if ($conn->query($sql) === TRUE) {
		//echo "New record created successfully";
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