<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="style.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
  </head>
  <body>
  </body>
</html>
  <title>VagasParaTI-RJ</title>
</head>
<?php 
  session_start();
?>
<body>
<nav class="dp-menu">
      <input type="checkbox" id="check">
      <label for="check" class="checkbtn">
        <img style="height:25px" src="./img/icon/bars-solid.svg" alt="meu icone">
      </label>
      <label class="logo">VagasTI</label>
      <ul>
        <li><a href="./index.php">
            <img style="height:25px" src="./img/icon/home-solid.svg" alt="meu icone">
           <b> Home</b>
        </a></li>
        <li><a href="./vagas.php"><img style="height:25px" src="./img/icon/file-alt-solid.svg" alt="meu icone">
          <b>Vagas</b>
        </a></li>

      <?php if(!isset($_SESSION['email'])): ?>
         <li><a style="background-color:#066a75;color:white;" class="active" class="botao" href="./cadastrar.php">Cadastrar / Login</a></li>              
      <?php endif; ?> 

      <?php
        if(isset($_SESSION['email'])): 
        include('./php/verifica_login.php');
      ?>
        <li><a href="#"><img style="height:35px" src="./img/icon/user-circle-regular.svg" alt="meu icone"></a>
          <ul>
	          <li><a id="sm" href="./perfil.php"><b>Perfil</b></a></li>
	          <li><a id="sm" href="./cadastrarvaga.php"><b>Cadastrar Vaga</b></a></li>
	          <li><a id="sm" href="./php/logout.php"><b>Logout</b></a></li>
	       	</ul> 
        </li>
      <?php endif; ?> 

      </ul>
    </nav>