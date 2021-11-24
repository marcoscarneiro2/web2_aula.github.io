<?php
session_start();
include_once 'conexao.php';

$celular = $_POST['celular'];
$desempresa = $_POST['desempresa'];
$categoria = $_POST['categoria'];
$cep = $_POST['cep'];
$rua = $_POST['rua'];
$bairro = $_POST['bairro'];
$estado = $_POST['estado'];
$website = $_POST['website'];
$github = $_POST['github'];
$twitter = $_POST['twitter'];
$instagram = $_POST['instagram'];
$facebook = $_POST['facebook'];


// Checar se existem campos vazios
if (empty($celular)) {

	$_SESSION['mensagem'] = "<div id='btms' style='background-color:#DAA520;widht:100%;color:white;text-align:center;padding:1%'>Preencha os campos!</div>";
	header("location:../../view/TelaEmpresa.php");
} else {
	$extensao = strtolower(substr($_FILES['logoempresa']['name'],-4));
	$novo_nome = md5(time()).$extensao;
	$diretorio = "../../assets/img/foto_empresa/";
    $last_id = mysqli_insert_id($conn);
		$sql = "INSERT INTO `empresa`(`telefone`, `descricao_empresa`, `categoria`, `imagem_empresa`, `cep`, `rua`, `bairro`, `estado`, `sobre`, `idUsuario`, `website`, `twitter`, `instagram`, `facebook`) 
        VALUES ('".$celular."','".$desempresa."','".$categoria."','".$novo_nome."','".$cep."','".$rua."','".$bairro."','".$estado."','".$sobre."','".$last_id."','".$website."','".$twitter."','".$instagram."','".$facebook."')";

		if ($conn->query($sql) === TRUE) {
			//echo "Novo registro criado com sucesso";
			move_uploaded_file($_FILES['logoempresa']['tmp_name'], $diretorio.$novo_nome);
			$_SESSION['mensagem'] = "<div id='btms' style='background-color:green;widht:100%;color:white;text-align:center;padding:1%'>Usuário cadastrado com sucesso!!</div>";
			header("location:../../public/");
		} else {
			//echo "Error: " . $sql . "<br>" . $conn->error;
			$_SESSION['mensagem'] = "<div id='btms' style='background-color:red;widht:100%;color:white;text-align:center;padding:1%'>Usuário não foi cadastrado!!</div>";
			header("location:../../view/TelaEmpresa.php");
		}

	

	$conn->close();
}
?>