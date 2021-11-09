<?php
include_once '../assets/components/navbar.php';
include_once '../assets/php/conexao.php';

$id = $_SESSION['id_usuario'];
//Mostra os dados da tabela usuario
$sql = "SELECT * FROM usuario  WHERE id_usuario = '".$id."' ";
$query = mysqli_query($conn, $sql);
$row = mysqli_fetch_array($query);
?> 

<br><br><br>
<article>
  <div class="containercd" >
    <div class="container" >
      <a class="links" id="paracadastro"></a>
      <a class="links" id="paralogin"></a>

      <div class="content">            
        <!--FORMULÁRIO DE CADASTRO-->
        <div id="cadastro">
          <form method="POST" action="../assets/php/alterarCadastro.php"> 
          <h2 style="text-align:center">Alteração de dados</h2><br><br>

            <?php if(isset($_SESSION["mensagem"])):
             print $_SESSION["mensagem"];
           endif; ?>
           <br/>
           <p> 
            <label for="nome_cad">Seu nome</label>
            <input type="text" name="nome" value="<?php echo $row['nome']; ?>">
          </p>

          <p> 
            <label for="email_cad">Seu e-mail</label>
            <input  type="email" name="email" value="<?php echo $row['email']; ?>">   
          </p>

          <p> 
            <label for="senha_cad">Sua senha</label>
            <input maxlength="15" type="password" name="senha" value="<?php echo $row['senha']; ?>"> 
          </p>

          <p> 
            <input type="submit" value="Alterar"/> 
          </p>
        </form>
      </div>
    </div>
  </div> 
</div>
</article>

<?php 
include_once '../assets/components/footer.php';
?>