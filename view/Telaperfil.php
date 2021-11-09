<?php 
include_once '../assets/components/navbar.php';

?>
 <?php if(isset($_SESSION["mensagem"])):
        print $_SESSION["mensagem"];
        unset($_SESSION["mensagem"]);
    endif; ?>

<div style="margin-bottom:20%">
    <tr>
    <br> <br> <br>
        <td>NOME = <?= $_SESSION['nome'] ?></td>
        <br>
        <td>E-MAIL = <?= $_SESSION['email'] ?></td>
        <br>        
        <td><a href="./alterar_cadastro.php?id= <?= $_SESSION["id_usuario"] ?>">Alterar</a>
        <td>
            <form action="../assets/php/remover_cadastro.php" method="post">
                <input type="hidden" name="id"> 
                <button onclick="return checkDelete()">Remover Cadastro</button>
            </form>
        </td>
    </tr>

    <span id="conteudo"></span>
    <script src="../assets/js/produtodousuario.js"></script>
           
</div>
<script>
function checkDelete(){
    return confirm('Tem certeza que deseja excluir a conta?');
}
function checkDeleteprod(){
    return confirm('Tem certeza que deseja excluir o produto?');
}
</script>
<?php 
include_once 'components/footer.php';
?>