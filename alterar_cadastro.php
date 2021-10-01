<?php
include_once 'components/navbar.php';
include_once './php/conexao.php';

$id = $_SESSION['id'];
//Mostra os dados da tabela usuario
$sql = "SELECT * FROM cliente  WHERE id = '".$id."' ";
$query = mysqli_query($conn, $sql);
$row = mysqli_fetch_array($query);
?> 

<form action="./php/alterarCadastro.php" method="post">
    <h2>Alteração de dados</h2><br><br>

    <input type="hidden" class="form-control" id="exampleInputName" aria-describedby="NameHelp" name="id" value="<?php echo $row['id']; ?>">
                                     
    <label>Nome</label>
    <input type="text" name="nome" value="<?php echo $row['nome']; ?>">
    <br>
    <label>Email</label>
    <input  type="email" name="email" value="<?php echo $row['email']; ?>">  
    <br>
    <label for="exampleInputEmail1">Senha</label>
    <input maxlength="15" type="password" name="senha" value="<?php echo $row['senha']; ?>">                                                                            
    <br>                   
  <button  type="submit">Alterar</button>

</form>

<?php 
include_once 'components/footer.php';
?>