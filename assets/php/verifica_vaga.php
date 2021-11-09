<?php
session_start();
include_once 'conexao.php';

$query = "SELECT * FROM `produto` WHERE STATUS = 'aberto' and quantidade > 0";
$query = mysqli_query($conn, $query);

//Verificar se encontrou resultado na tabela "vagas"
if(($query) AND ($query->num_rows != 0)){
	while($row_produto = mysqli_fetch_assoc($query)){
        $id=$row_produto['id_produto'];  
        $Nome_do_produto=$row_produto['nome'];
        $Descricao=$row_produto['descricao'];
        $Status=$row_produto['status'];  
        $Valor=$row_produto['valor'];
        $imagem =$row_produto['imagem_produto'];
        $Quantidade =$row_produto['quantidade'];
        
        echo '<div class="cardcontainer">';
        echo '<div class="container">';
        echo '<h1>'.$Nome_do_produto.'</h1>';
        echo '<div class="content">';
        echo "<img src='./img/produtos/$imagem' ";
        /*echo '<hr>';*/
        echo '<div class="content">';
        echo '<h3> Valor: R$ '.$Valor.'</h3>';
        echo '<div class="content">';
        echo '<h3> Disponível : '.$Quantidade.'</h3>';
        /*echo '<hr>';*/
        echo '<p style="max-width: 20ch;overflow: hidden;text-overflow: ellipsis;white-space: nowrap;"> <b>Descrição</b></br>'.$Descricao.'</p>';
        /*echo '<p><b>Faixa salarial</b></br>'.$salario.'</p>';*/
        echo '</div>';
        echo '</div>';
        echo '</div>';
        echo ' <form action="./php/comprar.php" method="post">';
        echo "<input name='id_produto' style='display:none' value='$id' <br><br>";
        echo ' <input type="number" name="vendido"> ';
        echo '<button type="submit" id="status"><p><b>Comprar</b></p></button>';
        echo '</form>';
        echo '</div>';
	}
}else{
	echo "<h1 style='position: relative;margin: 10% 10% 0% 40%'> Nenhuma vaga disponível </h1>";
}
