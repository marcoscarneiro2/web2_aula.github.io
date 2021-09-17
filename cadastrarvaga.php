<?php 
include_once 'components/navbar.php';
?>

 <br/>
 <br/>
 <br/>
<article>
  <div class="containercd" style="margin-top: 5%">
    <div class="container" >
      <a class="links" id="paracadastro"></a>
      <a class="links" id="paralogin"></a>

      <div class="content">            
        <!--FORMULÁRIO DE CADASTRO-->
        <div id="cadastro">
          <form method="POST" action="php/cadastrovaga.php"> 
            <h1>Cadastrar vaga</h1> 

            <?php if(isset($_SESSION["mensagem"])):
             print $_SESSION["mensagem"];
           endif; ?>
           <br/>
           <p> 
            <label>Nome da Vaga</label>
            <input id="nome_vg" name="nome_vg" required type="text" placeholder="Analista junior" />
          </p>

          <p> 
            <label>Nome da empresa</label>
            <input id="nomeemp_vg" name="nomeemp_vg" required type="text" placeholder="vagasTi" /> 
          </p>

          <p> 
            <label >Descrição da vaga</label><br/>
            <textarea rows="10" cols="60" maxlength="255"  name="descricao" required  placeholder="Descreva a vaga"></textarea>
          </p>

          <p> 
            <label >Faixa Salaria</label>
            <input id="senha_cad" name="faisalarial" required type="number" placeholder="R$ 1000.00" />
          </p>

          <p> 
            <input type="submit" value="Cadastrar"/> 
            <a href="./index.php"><input style="width:100%;background:red;color:white;font-size:20px" type="button" value="Cancelar"/> </a>
          
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