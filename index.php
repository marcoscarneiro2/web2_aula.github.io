<?php 
  include_once 'pages/navbar.php';
  session_start();
  ?>
    
    <h1>Página Inicial</h1>

    <?php if(isset($_SESSION["mensagem"])):
        print $_SESSION["mensagem"];
        unset($_SESSION["mensagem"]);
    endif; ?>

    <?php 
    include_once 'pages/footer.php';
  ?>
