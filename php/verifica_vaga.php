<?php
session_start();
include_once 'conexao.php';

$query = "SELECT * FROM `vagas` WHERE STATUS = 'Aberto' ";
$query = mysqli_query($conn, $query);

//Verificar se encontrou resultado na tabela "vagas"
if(($query) AND ($query->num_rows != 0)){
	while($row_vagas = mysqli_fetch_assoc($query)){
        $id=$row_vagas['id'];  
        $nome_da_vaga=$row_vagas['nome_da_vaga'];
        $nome_da_empresa=$row_vagas['nome_da_empresa'];
        $descricao_vaga=$row_vagas['descricao_vaga'];
        $status=$row_vagas['status'];  
        $salario=$row_vagas['salario'];
        
        echo '<div class="cardcontainer">';
        echo '<div class="container">';
        echo '<div class="content">';
        echo '<h1>'.$nome_da_vaga.'</h1>';
        /*echo '<hr>';*/
        echo '<h3>'.$nome_da_empresa.'</h3>';
        /*echo '<hr>';*/
        echo '<p> <b>Descrição da vaga</b></br>'.$descricao_vaga.'</p>';
        /*echo '<p><b>Faixa salarial</b></br>'.$salario.'</p>';*/
        echo '</div>';
        echo '</div>';
        echo '<button id="status"><p><b>CANDIDATE-SE</b></p></button>';
        echo '</div>';
	}
}else{
	echo "<h1 style='position: relative;margin: 10% 10% 0% 40%'> Nenhuma vaga disponível </h1>";
}