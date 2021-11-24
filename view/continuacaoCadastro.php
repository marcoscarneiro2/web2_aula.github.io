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
        <!--FORMULÁRIO DE LOGIN-->
        <div id="login">
          <form method="POST" action="../assets/php/ContinuarCadastro.php"> 
            <h1 style="font-size:23px">Continuar Cadastro</h1> 
            <p style="text-align:center">Logue na sua conta para poder continuar o cadastro</p>
            
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
          <label for="escolha">
          <label >Olá, você veio: </label>
                <select style="height:auto;padding:2%;border: 1px solid #066a75;width:100%;border-radius:3px" name="escolha" id="escolha">
                    <option value="candidato">Buscar vaga</option>
                    <option value="empresa">Buscar colaboradores</option>
               </select>
            </label>
          </p>
            <p> 
              <input type="submit" value="Avançar" /> 
            </p>

            <p class="link">
              Ainda não tem conta?
              <a href="../view/cadastrar.php">Cadastre-se</a>
              <a href="../public/">Cancelar</a>
            </p>
           
          </form>
        </div>
    </div>
  </div> 
</div>

</article>

