<?php
include_once 'conexao.php';

if(isset($_FILES['arquivo'])){
    $extensao = strtolower(substr($_FILES['arquivo']['name'],-4));
    $novo_nome = md5(time()).$extensao;
    $diretorio = "../curriculos/";

    move_uploaded_file($_FILES['arquivo']['tmp_name'], $diretorio.$novo_nome);

    $sql = "INSERT INTO arquivo (id_arquivo,arquivo,data_arquivo) VALUES(null,'".$novo_nome."',NOW())";

    if($conn->query($sql)){
        $_SESSION['mensagem'] = "<div id='btms' style='background-color:green;widht:100%;color:white;text-align:center;padding:1%'>Curriculo enviado!!</div>";
        header("location:../Telaperfil.php");
    }else{
        $_SESSION['mensagem'] = "<div id='btms' style='background-color:red;widht:100%;color:white;text-align:center;padding:1%'>Erro ao enviar o arquivo!!</div>";
        header("location:../Telaperfil.php");
    }
}
?>