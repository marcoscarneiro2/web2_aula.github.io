<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../public/style.css">
  <link rel="shortcut icon" href="../assets/img/icon/j.png">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
  </head>
  <body>
  </body>
</html>
  <title>OBS</title>
</head>
<?php 
  session_start();
?>
<body>
<nav class="dp-menu">
      <input type="checkbox" id="check">
      <label for="check" class="checkbtn">
        <img style="height:25px" src="../assets/img/icon/bars-solid.svg" alt="meu icone">
      </label>
      <label class="logo"><img style="height:45px" src="../assets/img/icon/logo.png"></label>
      <ul>
        <li><a href="../public/">
            <img style="height:25px" src="../assets/img/icon/home-solid.svg" alt="meu icone">
           <b> Home</b>
        </a></li>
      <?php if(!isset($_SESSION['email'])): ?>
         <li><a style="background-color:#066a75;color:white;" class="active" class="botao" href="../view/EntrarSistema.php">Cadastrar / Login</a></li>              
      <?php endif; ?> 

      <?php
        if(isset($_SESSION['email'])): 
        include('./php/verifica_login.php');
      ?>
        <li><a href="#"><img style="height:35px" src="../assets/img/icon/user-circle-regular.svg" alt="meu icone"></a>
          <ul>
	          <li><a id="sm" href="../view/Telaperfil.php"><b>Perfil</b></a></li>
              <?php
                if($_SESSION['nivel'] == 2 ): 
              ?>
	          <li><a id="sm" href="../view/cadastrarproduto.php?id= <?= $_SESSION["id_usuario"] ?>"><b>Cadastrar Produto</b></a></li>
              <?php endif; ?> 
	          <li><a id="sm" href="../assets/php/logout.php"><b>Logout</b></a></li>
	       	</ul> 
        </li>
      <?php endif; ?> 

      </ul>
    </nav>