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
            <h1>Cadastrar vaga</h1> 

            <?php if(isset($_SESSION["mensagem"])):
             print $_SESSION["mensagem"];
           endif; ?>
           <br/>
           <p> 
            <label>Nome da vaga</label>
            <input id="nome_vg" name="nome_pd" required type="text" placeholder="vaga help-desk senior" />
          </p>

          <p> 
            <label >Descrição da vaga</label><br/>
            <textarea style="border: 1px solid #066a75;border-radius:3px" rows="10" cols="60" maxlength="255"  name="descricao" required  placeholder="Descreva a vaga"></textarea>
          </p>

          <p> 
          <label for="escolaridade">
          <label >Escolaridade</label>
                <select style="height:auto;padding:2%;border: 1px solid #066a75;width:100%;border-radius:3px" name="escolaridade" id="escolaridade">
                    <option value="Outros"></option>
                    <option value="Masculino">Ensino Fundamental Completo</option>
                    <option value="Feminino">Ensino médio incompleto</option> 
                    <option value="Feminino">Ensino médio completo</option> 
                    <option value="Feminino">Ensino superior incompleto</option> 
                    <option value="Feminino">Ensino superior completo</option> 
               </select>
            </label>
          </p>

          <p> 
          <label for="tipoDeContrato">
          <label >Tipo de Contrato</label>
                <select style="height:auto;padding:2%;border: 1px solid #066a75;width:100%;border-radius:3px" name="tipoDeContrato" id="tipoDeContrato">
                    <option></option>
                    <option value="Masculino">CLT</option>
                    <option value="Feminino">PJ</option> 
                    <option value="Feminino">Estágio</option> 
                    <option value="Feminino">Temporário</option>  
               </select>
            </label>
          </p>

          <p> 
            <label >Exigencias</label><br/>
            <textarea style="border: 1px solid #066a75;border-radius:3px" rows="10" cols="60" maxlength="255"  name="descricao" required  placeholder="Descreva a vaga"></textarea>
          </p>

          <p> 
            <label >Faixa Salarial</label>
            <input id="senha_cad" name="valor" required type="number" placeholder="R$ 1000.00" />
          </p>

          <p> 
            <label >Quantidade de vagas</label>
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
include_once '../assets/components/footer.php';
?> 