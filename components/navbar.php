<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="style.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
  <title>VagasParaTI-RJ</title>
</head>
<?php 
  session_start();
?>
<body>
<div class="nav">
  <input type="checkbox" id="nav-check">
  <div class="nav-header">
    <div class="nav-title">
     <a href="./index.php"><b style="color:#066a75">VagasTI</b></a>
    </div>
  </div>
  <div class="nav-btn">
    <label for="nav-check">
      <span></span>
      <span></span>
      <span></span>
    </label>
  </div>
  
  <div class="nav-links">
    <a href="./index.php">Pagina Inicial</a>
    <a href="./index.php">Vagas</a>

    <?php
      if(!isset($_SESSION['email'])):   
    ?>
          <a style="color:white" class="botao" href="./cadastrar.php">Cadastrar / Login</a>                 
    <?php
      endif;
    ?> 

    <?php
      if(isset($_SESSION['email'])): 
      include('./php/verifica_login.php');
    ?>
      <a href="./php/logout.php"> <h2 style="color:black;font-size:13px">Olá, <?php echo $_SESSION["email"];?></h2></a>
    <?php
      endif;
    ?> 
     
  </div>
</div>