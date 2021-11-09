<?php
session_start();
include_once 'conexao.php';
$id_usuario = $_SESSION['id_usuario'];
$query = "SELECT * FROM produto WHERE idUsuario = '$id_usuario' ";
$query = mysqli_query($conn, $query);

//Verificar se encontrou resultado na tabela "vagas"
if(($query) AND ($query->num_rows != 0)){
	while($row_produto = mysqli_fetch_assoc($query)){
        $id_produto=$row_produto['id_produto'];  
        $Nome_do_produto=$row_produto['nome'];
        $Descricao=$row_produto['descricao'];
        $Status=$row_produto['status'];  
        $Valor=$row_produto['valor'];
        $imagem =$row_produto['imagem_produto'];
        $Quantidade =$row_produto['quantidade'];
        
        echo '<div>';
        echo "<table style='width:100%; background:white';
        <tr >
           <th style='background:brown;color:white;padding:3px'>Nome</th>
           <th style='background:brown;color:white;padding:3px'>Imagem</th>
           <th style='background:brown;color:white;padding:3px'>Valor</th>
           <th style='background:brown;color:white;padding:3px'>Quantidade</th>
           <th style='background:brown;color:white;padding:3px'>Descrição</th>
           <th style='background:brown;color:white;padding:3px'>Status</th>
           <th style='background:brown;color:white;padding:3px'>Código</th>
           <th style='background:brown;color:white;padding:3px'></th>
           <th style='background:brown;color:white;padding:3px'></th>
        </tr>";
        
         echo " <tr style='text-align:center'>";
         echo " <td>$Nome_do_produto</td>";
         echo " <td><img style='width:50px; height:50px' src='./img/produtos/$imagem'></td>";
         echo " <td>$Valor</td>";
         echo " <td>$Quantidade</td>";
         echo " <td style='max-width: 10ch;overflow: hidden;text-overflow: ellipsis;white-space: nowrap;'></br>$Descricao</td>";
         echo " <td></br>$Status</td>";
         echo "<td></br>$id_produto</td>";
         
         echo "<td><button style='background:yellow; padding:5px;border-radius:20px;border-color:yellow'><a href='./alterar_produto.php?id_produto=".$row_produto['id_produto']."' ' >Alterar</a></button></td>";   
         echo "<td><button onclick='return checkDeleteprod()' style='background:red; padding:5px;border-radius:20px;border-color:red'><a href='./php/deletarproduto.php?id_produto=".$row_produto['id_produto']."' ' >Deletar</a></button></td>";
         
        
        echo"</table>";
        echo '</div>';
	}
}else{
	echo "<h1 style='position: relative;margin: 10% 10% 0% 40%'> Nenhum produto cadastrado </h1>";
}