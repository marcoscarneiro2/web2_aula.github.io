<?php
session_start();
include_once 'conexao.php';

$nome = htmlspecialchars($_POST["nome"]);
$email = $_POST['email'];
$senha = md5($_POST['senha']);
$tipo = $_POST['escolha'];


// Checar se existem campos vazios
if (empty($nome) || empty($email) || empty($senha)) {

	$_SESSION['mensagem'] = "<div id='btms' style='background-color:#DAA520;widht:100%;color:white;text-align:center;padding:1%'>Preencha os campos!</div>";
	header("location:../cadastrar.php");
} else {

		$sql = "INSERT INTO usuario (nome,email,senha) VALUES ('".$nome."','".$email."','".$senha."')";

		if ($conn->query($sql) === TRUE) {
			//echo "Novo registro criado com sucesso";
			$_SESSION['mensagem'] = "<div id='btms' style='background-color:green;widht:100%;color:white;text-align:center;padding:1%'>Usuário cadastrado com sucesso!!</div>";
			header("location:../../view/continuacaoCadastro.php");
		} else {
			//echo "Error: " . $sql . "<br>" . $conn->error;
			$_SESSION['mensagem'] = "<div id='btms' style='background-color:red;widht:100%;color:white;text-align:center;padding:1%'>Usuário não foi cadastrado!!</div>";
			header("location:../../view/cadastrar.php");
		}

	$conn->close();
}
?>