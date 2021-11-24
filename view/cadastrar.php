<?php 
session_start();
?>

 <link rel="stylesheet" href="../public/style.css">
 <br/>
 <br/>
 <br/>
<article>
  <div class="containercd" >
    <div class="container" >
      <a class="links" id="paracadastro"></a>
      <a class="links" id="paralogin"></a>

      <div class="content">            
        <!--FORMULÁRIO DE CADASTRO-->
        <div id="cadastro">
          <form method="POST" action="../assets/php/cadastro.php"> 
            <h1>Cadastro</h1> 

            <?php if(isset($_SESSION["mensagem"])):
             print $_SESSION["mensagem"];
           endif; ?>
           <br/>
           <p> 
            <label for="nome_cad">Seu nome</label>
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
          </p>

          <p class="link">  
            Já tem conta?
            <a href="../view/EntrarSistema.php"> Ir para Login </a>
            <a href="../public/">Cancelar</a>
          </p>
        </form>
      </div>
    </div>
  </div> 
</div>
</article>
