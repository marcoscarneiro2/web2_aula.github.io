<?php
session_start();
include_once 'conexao.php';

$Nomevg = $_POST['nome_vg'];
$Nomeemp = $_POST['nomeemp_vg'];
$Descvaga = $_POST['descricao'];
$Faisalario = $_POST['faisalarial'];



// Checar se existem campos vazios
if (empty($Nomevg) || empty($Nomeemp) || empty($Descvaga) || empty($Faisalario)) {

	$_SESSION['mensagem'] = "<div id='btms' style='background-color:#DAA520;widht:100%;color:white;text-align:center;padding:1%'>Preencha os campos!</div>";
	header("location:../cadastrarvaga.php");
} else {

	$sql = "INSERT INTO vagas (nome_da_vaga,nome_da_empresa,descricao_vaga,salario) VALUES ('".$Nomevg."','".$Nomeemp."','".$Descvaga."','".$Faisalario."')";

	if ($conn->query($sql) === TRUE) {
		//echo "Novo registro criado com sucesso";
		$_SESSION['mensagem'] = "<div id='btms' style='background-color:green;widht:100%;color:white;text-align:center;padding:1%'>Vaga cadastrada com sucesso!!</div>";
		header("location:../cadastrarvaga.php");
	} else {
		//echo "Error: " . $sql . "<br>" . $conn->error;
		$_SESSION['mensagem'] = "<div id='btms' style='background-color:red;widht:100%;color:white;text-align:center;padding:1%'>Vaga não foi cadastrada!!</div>";
		header("location:../cadastrarvagas.php");
	}

	$conn->close();
}
?>