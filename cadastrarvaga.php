<?php 
include_once 'components/navbar.php';
?>

 <br/>
 <br/>
 <br/>
<article>
  <div class="container" >
    <div class="container" >
      <a class="links" id="paracadastro"></a>
      <a class="links" id="paralogin"></a>

      <div class="content">            
        <!--FORMULÁRIO DE CADASTRO-->
        <div id="cadastro">
          <form method="POST" action="php/#"> 
            <h1>Cadastrar vaga</h1> 

            <?php if(isset($_SESSION["mensagem"])):
             print $_SESSION["mensagem"];
           endif; ?>
           <br/>
           <p> 
            <label for="nome_cad">Nome da Vaga</label>
            <input id="nome_cad" name="nome" required type="text" placeholder="Marcos Paulo" />
          </p>

          <p> 
            <label for="email_cad">Seu e-mail</label>
            <input id="email_cad" name="email" required type="email" placeholder="contato@meuprojeto.com"/> 
          </p>

          <p> 
            <label for="senha_cad">Sua senha</label>
            <input id="senha_cad" name="senha" required type="password" placeholder="1234"/>
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



<?php 
include_once 'components/footer.php';
?>