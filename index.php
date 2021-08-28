<?php 
  include_once 'components/navbar.php';
  session_start();
  ?>
    <?php if(isset($_SESSION["mensagem"])):
        print $_SESSION["mensagem"];
        unset($_SESSION["mensagem"]);
    endif; ?>

    <?php 
    include_once 'components/footer.php';
  ?>
