<?php
include_once 'conexao.php';
session_start();


$id =  $_POST ['id_produto'];
$nome =  $_POST ['nome'];
$valor = $_POST ['valor'];
$descricao = $_POST [ 'descricao'];
$status = $_POST [ 'status'];     
$quantidade = $_POST [ 'quantidade'];   

$extensao = strtolower(substr($_FILES['arquivo']['name'],-4));
	$novo_nome = md5(time()).$extensao;
	$diretorio = "../img/produtos/";

if($novo_nome == "" || empty($novo_nome) || $extensao == ""){    
    $sql = "UPDATE produto SET nome='$nome', valor='$valor',descricao='$descricao',status='$status',quantidade='$quantidade' WHERE id_produto = '$id' ";
}  

if(isset($_FILES['arquivo']['name'])){
    $sql = "UPDATE produto SET nome='$nome', valor='$valor',descricao='$descricao',imagem_produto='$novo_nome',status='$status',quantidade='$quantidade' WHERE id_produto = '$id' ";
    $result = mysqli_query($conn, $sql) or die(mysqli_error($conn));
    move_uploaded_file($_FILES['arquivo']['tmp_name'], $diretorio.$novo_nome);

    $row = mysqli_affected_rows($conn);  
    if( $row == 1){
        
        $_SESSION['mensagem'] = "<div id='btms' style='background-color:green;widht:100%;color:white;text-align:center;padding:1%'>Usuário alterado com sucesso!!</div>";
        clearstatcache();
        header("location:../Telaperfil.php");
    }else{
        $_SESSION['mensagem'] = "<div id='btms' style='background-color:red;widht:100%;color:white;text-align:center;padding:1%'>Usuário não foi alterado!!</div>";
            header("location:../Telaperfil.php");
        }
}
?>