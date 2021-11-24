<?php
session_start();
include_once 'conexao.php';
$ID_usuario = $_SESSION['ID_usuario'];

$telefone = $_POST['telefone'];
$celular = $_POST['celular'];
$estadocivil = $_POST['estadocivil'];
$filhos = $_POST['filhos'];
$escolaridade = $_POST['escolaridade'];
$nacionalidade = $_POST['nacionalidade'];
$sobre = $_POST['sobre'];
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
if (empty($telefone) || empty($celular) || empty($estadocivil)) {

	$_SESSION['mensagem'] = "<div id='btms' style='background-color:#DAA520;widht:100%;color:white;text-align:center;padding:1%'>Preencha os campos!</div>";
	header("location:../../view/TelaCandidato.php");
} else {
	$extensao = strtolower(substr($_FILES['curriculo']['name'],-4));
	$novo_nome = md5(time()).$extensao;
	$diretorio = "../../assets/curriculos/";
   	
		$sql = "INSERT INTO candidato(ID_candidato,telefone,celular,curriculo,estado_civil,filhos,escolaridade,nacionalidade,sobre,cep,rua,bairro,estado,website,github,twitter,instagram,facebook,idUsuario) 
		VALUES (null,'".$telefone."','".$celular."','".$novo_nome."','".$estadocivil."','".$filhos."','".$escolaridade."','".$nacionalidade."','".$sobre."','".$cep."','".$rua."','".$bairro."','".$estado."','".$website."','".$github."','".$twitter."','".$instagram."','".$facebook."', '".$ID_usuario."')";

		if ($conn->query($sql) === TRUE) {
			//echo "Novo registro criado com sucesso";
			move_uploaded_file($_FILES['curriculo']['tmp_name'], $diretorio.$novo_nome);
			$_SESSION['mensagem'] = "<div id='btms' style='background-color:green;widht:100%;color:white;text-align:center;padding:1%'>Usuário cadastrado com sucesso!!</div>";
			header("location:../../public/");
		} else {
			//echo "Error: " . $sql . "<br>" . $conn->error;
			$_SESSION['mensagem'] = "<div id='btms' style='background-color:red;widht:100%;color:white;text-align:center;padding:1%'>Usuário não foi cadastrado!!</div>";
			header("location:../../view/TelaCandidato.php?ID_usuario='.$ID_usuario");
		}

	

	$conn->close();
}
?>