<?php 
include_once 'components/navbar.php';
?>
 <?php if(isset($_SESSION["mensagem"])):
        print $_SESSION["mensagem"];
        unset($_SESSION["mensagem"]);
    endif; ?>


    <tr>
    <br> <br> <br>
        <td>NOME = <?= $_SESSION['nome'] ?></td>
        <br>
        <td>E-MAIL = <?= $_SESSION['email'] ?></td>
        <br>
        <form action="php/enviar_curriculo.php" method="post" enctype="multipart/form-data">
         <input type="file" name="arquivo" accept="application/pdf">
         <br><br>
         <input type="reset" value="Apagar">
         <input type="submit" value="Enviar"></form>
        
        <td><a href="./alterar_cadastro.php?id= <?= $_SESSION["id"] ?>">Alterar</a>
        <td>
            <form action="./php/remover_cadastro.php" method="post">
                <input type="hidden" name="id"> 
                <button>Remover Cadastro</button>
            </form>
        </td>
    </tr>
           


<?php 
include_once 'components/footer.php';
?>