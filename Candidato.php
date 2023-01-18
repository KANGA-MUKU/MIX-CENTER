<?php
include_once('conexao.php');
SESSION_START();
//var_dump($_SESSION);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Css/bootstrap.min.css">
    <link rel="stylesheet" href="Css/StyleLogin.css">
    <link rel="stylesheet" href="css/index.css">
    <link rel="shortcut icon" href="icon/loder.ico" type="image/x-icon">
    <link rel="stylesheet" href="fontawesome-free-6.2.1-web/css/all.min.css">
    
    <title>Login</title>
</head>
<body>
  <header class="navbar1">
    <div class="logo">
      <a href="index.html"> <img src="img/loder.png" alt="" class="logotipo" style="margin-right:11px;"> </a>  
    </div>
    <nav>
      <div class="menu-btn">
        <i class="fa-solid fa-bars" onclick="menuShow()"></i>
    </div>
       <ul>
        <li style= "color: orange">Olá, <?php echo $_SESSION['Candidatura']['Nome']; ?></li>
        <li><a href="login.html">Sair</a></li>
       </ul>
    </nav>
</header>
    <br>
    <br>
    <br>
    <br>
    <div class="d-flex flex-column flex-shrink-0 p-3 text-bg-dark" style="width: 290px; height: 718px;  background-color: #282a35;color: orange">
    <a href="#" class=" text-decoration-none ">
      </a>
    <a href="/" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto text-white text-decoration-none">
      <svg class="bi pe-none me-2" width="40" height="32"><use xlink:href="#bootstrap"></use></svg>
      <span class="fs-4"> <?php echo $_SESSION['Candidatura']['Nome']; ?> </span>
    </a>
    <hr>
       <ul class="nav nav-pills flex-column mb-auto">
      <li class="nav-item b">
        <a href="perfil.html" class="nav-link  text-white" aria-current="page">
          <svg class="bi pe-none me-2" width="16" height="16"><use xlink:href="#home"></use></svg>
          <i class="fa-solid fa-user-pen"> PERFIL</i>  
        </a>
        
      </li>

      <!-- NOTA -->
      <li class="b">
        <a href="avaliacoes.html" class="nav-link text-white">
          <svg class="bi pe-none me-2" width="16" height="16" color="oragenge"><use xlink:href="#table"></use></svg>
          <i class="fa-solid fa-percent">  Personal Treiner</i>
        </a>
      </li>

      <li class="b">
        <a href="sugestao.php" class="nav-link text-white">
          <svg class="bi pe-none me-2" width="16" height="16"><use xlink:href="#grid"></use></svg>
          <i class="fa-solid fa-comment"> SUGESTÕES</i>  
        </a>
      </li>

    </ul>
    <hr>
   
  </div>
  <div></div>
      

      <script src="js/main.js"></script>
</body>
</html>