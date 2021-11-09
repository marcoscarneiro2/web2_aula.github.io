<?php
include_once '../assets/components/navbar.php';
include_once '../assets/php/conexao.php';

$id_produto = $_GET["id_produto"];
//Mostra os dados da tabela usuario
$sql = "SELECT * FROM produto  WHERE id_produto = '$id_produto' ";
$query = mysqli_query($conn, $sql);
$row = mysqli_fetch_array($query);
?> 
<article style="margin-bottom:70%">
  <div class="containercd" style="margin-top: 5%">
    <div class="container" >
      <a class="links" id="paracadastro"></a>
      <a class="links" id="paralogin"></a>

      <div class="content">            
        <!--FORMULÁRIO DE CADASTRO-->
        <div id="cadastro">
          <form method="POST" action="../assets/php/alterarproduto.php" enctype="multipart/form-data"> 
          <h1 style="font-size:24px">Alteração do produto</h1> 

            <?php if(isset($_SESSION["mensagem"])):
             print $_SESSION["mensagem"];
           endif; ?>
           <br/>
           <p> 
            <label>Nome do produto</label>
            <input type="text" name="nome" value="<?php echo $row['nome']; ?>">
          </p>

          <p> 
          <input name="id_produto" style="display:none" value="<?php echo $row['id_produto']; ?>">
          </p>

          <p> 
            <label>Foto do produto</label><br><br>
            <input id="nomeemp_vg" name="arquivo" type="file" accept="image/png,image/jpeg"/> 
          </p>

          <p> 
            <label >Descrição do produto</label><br/>
            <textarea rows="10" cols="60" type="text" maxlength="255"  name="descricao"><?php echo $row['descricao']; ?></textarea>
          </p>

          <p> 
            <label >Valor</label>
            <input id="senha_cad" name="valor"  type="number" value="<?php echo $row['valor']; ?>" />
          </p>

          <p> 
            <label >Quantidade</label>
            <input id="senha_cad" name="quantidade" type="number" value="<?php echo $row['quantidade']; ?>" />
          </p>

          <p> 
            <div class="form-input">
              <label>Status</label>
              <select name="status" id="status">
                  <option value="aberto">Aberto</option>
                  <option value="pausar">Pausar</option> 
              </select>
           </div>
          </p>

          <p> 
            <input type="submit" value="Alterar"/> 
            <a href="../view/Telaperfil.php"><input style="width:100%;background:red;color:white;font-size:20px" type="button" value="Cancelar"/> </a>
          
          </p>

        </form>
      </div>
    </div>
  </div> 
</div>
</article>        



<?php 
include_once 'components/footer.php';
?>