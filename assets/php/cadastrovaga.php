<?php
session_start();
include_once 'conexao.php';

$Nomepd = $_POST['nome_pd'];
$Descricao = $_POST['descricao'];
$Valor = $_POST['valor'];
$Quantidade = $_POST['quantidade'];
$id_usuario = $_SESSION['id_usuario'];


// Checar se existem campos vazios
if (empty($Nomepd) || empty($Descricao) || empty($Valor) || empty($Quantidade)) {

	$_SESSION['mensagem'] = "<div id='btms' style='background-color:#DAA520;widht:100%;color:white;text-align:center;padding:1%'>Preencha os campos!</div>";
	header("location:../cadastrarproduto.php");

} else {
	$extensao = strtolower(substr($_FILES['arquivo']['name'],-4));
	$novo_nome = md5(time()).$extensao;
	$diretorio = "../img/produtos/";
	$sql = "INSERT INTO produto (nome, valor, descricao, imagem_produto, data_produto,idUsuario, quantidade) VALUES ('".$Nomepd."','".$Valor."','".$Descricao."','".$novo_nome."',NOW(),'".$id_usuario."','".$Quantidade."')";

	if ($conn->query($sql) === TRUE) {
		//echo "Novo registro criado com sucesso";
		//Move o arquivo para pasta configurada
	   	move_uploaded_file($_FILES['arquivo']['tmp_name'], $diretorio.$novo_nome);
		$_SESSION['mensagem'] = "<div id='btms' style='background-color:green;widht:100%;color:white;text-align:center;padding:1%'>Produto cadastrado com sucesso!!</div>";
		header("location:../cadastrarproduto.php");
	} else {
		//echo "Error: " . $sql . "<br>" . $conn->error;
		$_SESSION['mensagem'] = "<div id='btms' style='background-color:red;widht:100%;color:white;text-align:center;padding:1%'>Produto não foi cadastrado!!</div>";
		header("location:../cadastrarproduto.php?id= <?= $_SESSION[id_usuario] ?> ");
	}

	$conn->close();
	}

?>