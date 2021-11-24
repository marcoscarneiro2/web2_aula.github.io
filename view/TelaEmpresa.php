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
        <div id="cadastro" style="text-align:center">
          <form method="POST" action="../assets/php/cadastroEmpresa.php" enctype="multipart/form-data"> 
            <h1>Olá Investidor</h1> 
            <p>Os melhores profissionais estão aqui!</p>
            <p>Preencha os dados para poder achar o profissional dos seus sonhos</p>

            <?php if(isset($_SESSION["mensagem"])):
             print $_SESSION["mensagem"];
           endif; ?>
           <br/>
          <p> 
            <label for="nome_cad">Celular</label>
            <input id="nome_cad" name="celular"  type="text" placeholder="(21) 98354-4893" />
          </p>
          <p> 
            <label >Descrição da empresa</label><br/>
            <textarea style="border: 1px solid #066a75;border-radius:3px" rows="10" cols="60" maxlength="255"  name="desempresa"   placeholder="Descreva a empresa"></textarea>
          </p>
          <p> 
          <label for="categoria">
          <label >Area de atuação: </label>
                <select style="height:auto;padding:2%;border: 1px solid #066a75;width:100%;border-radius:3px" name="categoria" id="categoria">
                    <option value="informatica">Informática</option>
                    <option value="juridico">Jurídico</option>
                    <option value="contabil">Contábil</option>
                    <option value="restaurante">Restaurante</option>
               </select>
            </label>
          </p>
          <p> 
            <label>Logo da empresa</label>
            <input id="nomeemp_vg" name="logoempresa" type="file" accept="image/*" /> 
          </p>
          <p> 
            <label for="senha_cad">CEP</label>
            <input id="senha_cad" name="cep" type="text" placeholder="21215-110"/>
          </p>
          <p> 
            <label for="senha_cad">Rua</label>
            <input id="senha_cad" name="rua"  type="text" placeholder="Av.Bras de Pina"/>
          </p>
          <p> 
            <label for="senha_cad">Bairro</label>
            <input id="senha_cad" name="bairro"  type="text" placeholder="Brás de pina"/>
          </p>
          <p> 
            <label for="senha_cad">Estado</label>
            <input id="senha_cad" name="estado"  type="text" placeholder="Rio de janeiro"/>
          </p>
          <p> 
            <label for="senha_cad">Seu site</label>
            <input id="senha_cad" name="website" type="text" placeholder="meusite.com.br"/>
          </p>
          <p> 
            <label for="senha_cad">Twitter</label>
            <input id="senha_cad" name="twitter"  type="text" placeholder="meu twitter"/>
          </p>
          <p> 
            <label for="senha_cad">Instagram</label>
            <input id="senha_cad" name="instagram"  type="text" placeholder="meu insta"/>
          </p>
          <p> 
            <label for="senha_cad">Facebook</label>
            <input id="senha_cad" name="facebook"  type="text" placeholder="meu face"/>
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
