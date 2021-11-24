<?php
session_start();
include_once 'conexao.php';

if(empty($_POST['email']) || empty($_POST['senha'])){
    header('Location:../../view/EntrarSistema.php');
    exit();
}
$nome_banco;
$nivel;
$email = $_POST['email'];
$senha = $_POST['senha'];
$tipo = $_POST['escolha'];

if($tipo == 'candidato'){
    $sql = "SELECT * FROM usuario INNER JOIN candidato ON idUsuario = ID_usuario WHERE email = '{$email}' AND senha = md5('{$senha}')";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            $hash = $row["senha"];
            $ID_usuario = $row["ID_usuario"];
            $nome_banco = $row["nome"];
            $nivel = $row["nivel"];
            $telefone = $row['telefone'];
            $celular = $row['celular'];
            $estadocivil = $row['estadocivil'];
            $filhos = $row['filhos'];
            $escolaridade = $row['escolaridade'];
            $nacionalidade = $row['nacionalidade'];
            $sobre = $row['sobre'];
            $cep = $row['cep'];
            $rua = $rowT['rua'];
            $bairro = $row['bairro'];
            $estado = $row['estado'];
            $website = $row['website'];
            $github = $row['github'];
            $twitter = $row['twitter'];
            $instagram = $row['instagram'];
            $facebook = $row['facebook'];
            $imagem =$row['curriculo'];
        }
        
        if ($sql == True) {

            $_SESSION['email'] = $email;
            $_SESSION['senha'] = $senha;
            $_SESSION['nome'] =$nome_banco;
            $_SESSION['nivel'] =$nivel;
            $_SESSION['ID_usuario'] = $ID_usuario;
            $_SESSION['telefone'] =  $telefone;
            $_SESSION['celular'] =$celular;
            $_SESSION['estadocivil']=$estadocivil;
            $_SESSION['filhos']=$filhos;
            $_SESSION['escolaridade']=$escolaridade;
            $_SESSION['nacionalidade']=$nacionalidade;
            $_SESSION['sobre']=$sobre;
            $_SESSION['cep']=$cep;
            $_SESSION['rua']= $rua;
            $_SESSION['bairro']= $bairro ;
            $_SESSION['estado']=$estado ;
            $_SESSION['website']=$website;
            $_SESSION['github']=$github;
            $_SESSION['twitter']= $twitter;
            $_SESSION['instagram']=$instagram;
            $_SESSION['facebook']=$facebook;
            $_SESSION['curriculo']=$imagem;
            
            header('Location:../../public/');

        } else {
            $_SESSION['nao_autenticado'] = true;
            $_SESSION['mensagem'] = "<div id='btms' style='background-color:red;widht:100%;color:white;text-align:center;padding:1%'>Senha inválida!!</div>";
            header('Location:../../view/EntrarSistema.php');
        }
    } else {
        $_SESSION['mensagem'] = "<div id='btms' style='background-color:#DAA520;widht:100%;color:white;text-align:center;padding:1%'>Usuário ou senha incorretos!!</div>";
        header('Location:../../view/EntrarSistema.php');
    }
}else{
    $sql = "SELECT * FROM usuario INNER JOIN empresa ON idUsuario = ID_usuario WHERE email = '{$email}' AND senha = md5('{$senha}')";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        $hash = $row["senha"];
        $ID_banco = $row["ID_usuario"];
        $nome_banco = $row["nome"];
        $nivel = $row["nivel"];
        $telefone = $row['telefone'];
        $desempresa = $row['descricao_empresa'];
        $categoria = $row['categoria'];
        $cep = $row['cep'];
        $rua = $rowT['rua'];
        $bairro = $row['bairro'];
        $estado = $row['estado'];
        $website = $row['website'];
        $github = $row['github'];
        $twitter = $row['twitter'];
        $instagram = $row['instagram'];
        $facebook = $row['facebook'];
        $imagem =$row['imagem_empresa'];
    }
    
    if ($sql == True) {

        $_SESSION['email'] = $email;
        $_SESSION['senha'] = $senha;
        $_SESSION['nome'] =$nome_banco;
        $_SESSION['nivel'] =$nivel;
        $_SESSION['ID_usuario'] = $id_banco;
        $_SESSION['telefone'] =$telefone;
        $_SESSION['descricao_empresa'] =$desempresa;
        $_SESSION['categoria'] =$categoria;
        $_SESSION['cep']=$cep;
        $_SESSION['rua']= $rua;
        $_SESSION['bairro']= $bairro ;
        $_SESSION['estado']=$estado ;
        $_SESSION['website']=$website;
        $_SESSION['github']=$github;
        $_SESSION['twitter']= $twitter;
        $_SESSION['instagram']=$instagram;
        $_SESSION['facebook']=$facebook;
        $_SESSION['imagem_empresa']=$imagem;
        header('Location:../../public/');

    } else {
        $_SESSION['nao_autenticado'] = true;
        $_SESSION['mensagem'] = "<div id='btms' style='background-color:red;widht:100%;color:white;text-align:center;padding:1%'>Senha inválida!!</div>";
        header('Location:../../view/EntrarSistema.php');
    }
} else {
    $_SESSION['mensagem'] = "<div id='btms' style='background-color:#DAA520;widht:100%;color:white;text-align:center;padding:1%'>Usuário ou senha incorretos!!</div>";
    header('Location:../../view/EntrarSistema.php');
}

}
?>