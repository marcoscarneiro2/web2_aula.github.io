<?php 
session_start();

?>

 <link rel="stylesheet" href="style.css">
 <br/>
 <br/>
 <br/>
<article>
  <div class="container" >

    <div class="container" >
      <a class="links" id="paracadastro"></a>
      <a class="links" id="paralogin"></a>

      <div class="content">      
        <!--FORMULÁRIO DE LOGIN-->
        <div id="login">
          <form method="POST" action="php/login.php"> 
            <h1>Login</h1> 
            
              <?php 
                if(isset($_SESSION["mensagem"])):
                print $_SESSION["mensagem"];
                unset($_SESSION["mensagem"]);
                endif; 
              ?>
              <p> 
              <label for="email_login">Seu e-mail</label>
              <input id="email_login" name="email" required="required" type="text" placeholder="contato@meuprojeto.com"/>
            </p>

            <p> 
              <label for="senha_login">Sua senha</label>
              <input id="senha_login" name="senha" required="required" type="password" placeholder="1234" /> 
            </p>

            <p> 
              <input type="checkbox" name="manterlogado" id="manterlogado" value="" /> 
              <label for="manterlogado">Manter-me logado</label>
            </p>

            <p> 
              <input type="submit" value="Logar" /> 
            </p>

            <p class="link">
              Ainda não tem conta?
              <a href="./cadastrar.php">Cadastre-se</a>
              <a href="./index.php">Cancelar</a>
            </p>
           
          </form>
        </div>
    </div>
  </div> 
</div>

</article>

