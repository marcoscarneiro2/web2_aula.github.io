<?php 
  include_once 'navbar.php';
  session_start();
  ?>



<article>


        <div class="container" >
          <div class="container" >
            <a class="links" id="paracadastro"></a>
            <a class="links" id="paralogin"></a>
            
            <div class="content">      
              <!--FORMULÁRIO DE LOGIN-->
              <div id="login">
                <form method="post" action=""> 
                  <h1>Login</h1> 
                  <p> 
                    <label for="email_login">Seu e-mail</label>
                    <input id="email_login" name="email_login" required="required" type="text" placeholder="contato@htmlecsspro.com"/>
                  </p>
                  
                  <p> 
                    <label for="senha_login">Sua senha</label>
                    <input id="senha_login" name="senha_login" required="required" type="password" placeholder="1234" /> 
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
                    <a href="#paracadastro">Cadastre-se</a>
                  </p>
                </form>
              </div>
        
              <!--FORMULÁRIO DE CADASTRO-->
              <div id="cadastro">
                <form method="post" action="cadastro.php"> 
                  <h1>Cadastro</h1> 

                  <?php if(isset($_SESSION["mensagem"])):
                         print $_SESSION["mensagem"];
                    endif; ?>
                  <br/>
                  <p> 
                    <label for="nome_cad">Seu nome</label>
                    <input id="nome_cad" name="nome" required="required" type="text" placeholder="Marcos Paulo" />
                  </p>
                  
                  <p> 
                    <label for="email_cad">Seu e-mail</label>
                    <input id="email_cad" name="email" required="required" type="email" placeholder="contato@meuprojeto.com"/> 
                  </p>
                  
                  <p> 
                    <label for="senha_cad">Sua senha</label>
                    <input id="senha_cad" name="senha" required="required" type="password" placeholder="1234"/>
                  </p>
                  
                  <p> 
                    <input type="submit" value="Cadastrar"/> 
                  </p>
                  
                  <p class="link">  
                    Já tem conta?
                    <a href="#paralogin"> Ir para Login </a>
                  </p>
                </form>
              </div>
            </div>
          </div> 
        </div>
    </article>
    <?php 
    include_once 'footer.php';
  ?>