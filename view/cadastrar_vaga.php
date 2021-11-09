<?php 
include_once '../assets/components/navbar.php';
?>

 <br/>
 <br/>
 <br/>
<article style="margin-bottom:70%">
  <div class="containercd" style="margin-top: 5%">
    <div class="container" >
      <a class="links" id="paracadastro"></a>
      <a class="links" id="paralogin"></a>

      <div class="content">            
        <!--FORMULÁRIO DE CADASTRO-->
        <div id="cadastro">
          <form method="POST" action="../assets/php/cadastrovaga.php" enctype="multipart/form-data"> 
            <h1>Cadastrar produto</h1> 

            <?php if(isset($_SESSION["mensagem"])):
             print $_SESSION["mensagem"];
           endif; ?>
           <br/>
           <p> 
            <label>Nome do produto</label>
            <input id="nome_vg" name="nome_pd" required type="text" placeholder="Placa-mãe" />
          </p>

          <p> 
            <label>Foto do produto</label>
            <input id="nomeemp_vg" name="arquivo" type="file" accept="image/png,image/jpeg" /> 
          </p>

          <p> 
            <label >Descrição do produto</label><br/>
            <textarea rows="10" cols="60" maxlength="255"  name="descricao" required  placeholder="Descreva a vaga"></textarea>
          </p>

          <p> 
            <label >Valor</label>
            <input id="senha_cad" name="valor" required type="number" placeholder="R$ 1000.00" />
          </p>

          <p> 
            <label >Quantidade</label>
            <input id="senha_cad" name="quantidade" required type="number" placeholder="1" />
          </p>

          <p> 
            <input type="submit" value="Cadastrar"/> 
            <a href="../public/"><input style="width:100%;background:red;color:white;font-size:20px" type="button" value="Cancelar"/> </a>
          
          </p>

        </form>
      </div>
    </div>
  </div> 
</div>
</article>
<br/>
 <br/>
 <br/>



<?php 
include_once 'components/footer.php';
?> 