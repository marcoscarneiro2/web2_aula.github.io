<?php 
session_start();
include_once '../assets/php/conexao.php';
$ID_usuario = $_SESSION['ID_usuario'];
//Mostra os dados da tabela usuario
$sql = "SELECT * FROM usuario INNER JOIN candidato ON idUsuario = ID_usuario  WHERE id_usuario = '".$ID_usuario."' ";
$result = $conn->query($sql);
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
          <form method="POST" action="../assets/php/alterarCadastro.php" enctype="multipart/form-data"> 
            <h1>Olá novamente</h1> 
            <p>Atualize seus dados sempre!</p>
            <p>Lembrando que com dados atualizados, mais empresas virão</p>

            <?php if(isset($_SESSION["mensagem"])):
             print $_SESSION["mensagem"];
           endif; ?>
           <br/>
           <p> 
            <label style="display:none" for="nome_cad">id</label>
            <input id="nome_cad" style="display:none" name="telefone"  type="text" Value="<?= $_SESSION['ID_usuario'] ?>" />
          </p>
           <p> 
            <label for="nome_cad">Nome Completo</label>
            <input id="nome_cad" name="telefone"  type="text" Value="<?= $_SESSION['nome'] ?>" />
          </p>
          <p> 
            <label for="nome_cad">E-mail</label>
            <input id="nome_cad" name="telefone"  type="text" Value="<?= $_SESSION['email'] ?>" />
          </p>
           <p> 
            <label for="nome_cad">Telefone</label>
            <input id="nome_cad" name="telefone"  type="text" Value="<?= $_SESSION['telefone'] ?>" />
          </p>
          <p> 
            <label for="nome_cad">Celular</label>
            <input id="nome_cad" name="celular"  type="text" Value="<?= $_SESSION['celular'] ?>"  />
          </p>
          <p> 
            <label>Currículo</label>
            <input id="nomeemp_vg" name="curriculo" type="file" Value="<?= $_SESSION['curriculo'] ?>" accept="application/pdf" /> 
          </p>

          <p> 
          <label for="estadocivil">
          <label >Estado civil: </label>
                <select style="height:auto;padding:2%;border: 1px solid #066a75;width:100%;border-radius:3px" name="estadocivil" Value="<?= $_SESSION['estadocivil'] ?>" id="estadocivil">
                    <option value="solteiro">Solteiro</option>
                    <option value="casado">Casado</option>
                    <option value="divorciado">Divorciado</option>
                    <option value="uniaoestavel">união estável</option>
               </select>
            </label>
          </p>
          <p> 
          <label for="filhos">
          <label >Possui filhos ?</label>
                <select style="height:auto;padding:2%;border: 1px solid #066a75;width:100%;border-radius:3px" Value="<?= $_SESSION['filhos'] ?>"  name="filhos" id="filhos">
                    <option value="nao">Não</option>
                    <option value="sim">Sim</option>
               </select>
            </label>
          </p>
          <p> 
          <label for="escolaridade">
          <label >Escolaridade</label>
                <select style="height:auto;padding:2%;border: 1px solid #066a75;width:100%;border-radius:3px" Value="<?= $_SESSION['escolaridade'] ?>" name="escolaridade" id="escolaridade">
                    <option></option>
                    <option value="Fundamental Completo">Ensino Fundamental Completo</option>
                    <option value="Medio incompleto">Ensino médio incompleto</option> 
                    <option value="Medio completo">Ensino médio completo</option> 
                    <option value="Superior incompleto">Ensino superior incompleto</option> 
                    <option value="Superior Completo">Ensino superior completo</option> 
               </select>
            </label>
          </p>

          <p> 
            <label for="email_cad">Nacionalidade</label>
            <input id="email_cad" name="nacionalidade"  type="text" Value="<?= $_SESSION['nacionalidade'] ?>"/> 
          </p>
          <p> 
            <label >Fale sobre você: </label><br/>
            <textarea style="border: 1px solid #066a75;border-radius:3px" rows="10" cols="60" maxlength="255"  name="sobre"   Value="<?= $_SESSION['sobre'] ?>"></textarea>
          </p>
          <p> 
            <label for="senha_cad">CEP</label>
            <input id="senha_cad" name="cep" type="text" Value="<?= $_SESSION['cep'] ?>"/>
          </p>
          <p> 
            <label for="senha_cad">Rua</label>
            <input id="senha_cad" name="rua"  type="text" Value="<?= $_SESSION['rua'] ?>"/>
          </p>
          <p> 
            <label for="senha_cad">Bairro</label>
            <input id="senha_cad" name="bairro"  type="text" Value="<?= $_SESSION['bairro'] ?>"/>
          </p>
          <p> 
            <label for="senha_cad">Estado</label>
            <input id="senha_cad" name="estado"  type="text" Value="<?= $_SESSION['estado'] ?>"/>
          </p>
          <p> 
            <label for="senha_cad">Seu site</label>
            <input id="senha_cad" name="website" type="text" Value="<?= $_SESSION['website'] ?>"/>
          </p>
          <p> 
            <label for="senha_cad">Github</label>
            <input id="senha_cad" name="github"  type="text" Value="<?= $_SESSION['github'] ?>"/>
          </p>
          <p> 
            <label for="senha_cad">Twitter</label>
            <input id="senha_cad" name="twitter"  type="text" Value="<?= $_SESSION['twitter'] ?>"/>
          </p>
          <p> 
            <label for="senha_cad">Instagram</label>
            <input id="senha_cad" name="instagram"  type="text" Value="<?= $_SESSION['instagram'] ?>"/>
          </p>
          <p> 
            <label for="senha_cad">Facebook</label>
            <input id="senha_cad" name="facebook"  type="text" Value="<?= $_SESSION['facebook'] ?>"/>
          </p>

          

          <p> 
            <input type="submit" value="Atualizar"/> 
          </p>

          <p class="link">  
            <a href="../view/Telaperfil.php">Cancelar</a>
          </p>
        </form>
      </div>
    </div>
  </div> 
</div>
</article>
