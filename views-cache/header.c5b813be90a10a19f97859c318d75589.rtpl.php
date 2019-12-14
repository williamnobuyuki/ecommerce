<?php if(!class_exists('Rain\Tpl')){exit;}?><!DOCTYPE html>
<html lang="pt-br">
  <head>
    <!-- Meta tags Obrigatórias -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">


     <!-- Google Fonts -->
    <link href='http://fonts.googleapis.com/css?family=Titillium+Web:400,200,300,700,600' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Roboto+Condensed:400,700,300' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Raleway:400,100' rel='stylesheet' type='text/css'>
    

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">



    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">

    
    <link rel="stylesheet" type="text/css" href="/res/site/css/estilo.css">
     <link rel="stylesheet" href="/res/site/css/style.css">

    <title>Loja Virtual - Zanardi Informática</title>
    <link rel="icon" href="/res/site/img/favicon.png">
  </head>
  <body>
    
    <header><!-- inicio Cabecalho -->
      <nav class="navbar navbar-expand-md navbar-light fixed-top navbar-transparente">
        <div class="container">
          
          <a href="index.html" class="navbar-brand">
            <img src="/res/site/img/zanardi.png" width="147" height="40">
          </a>

          <button class="navbar-toggler" data-toggle="collapse" data-target="#nav-principal">
            <i class="fas fa-bars text-white"></i>
          </button>

          <div class="collapse navbar-collapse" id="nav-principal">
            <ul class="navbar-nav ml-auto">
              <li class="nav-item">
                <a href="/" class="nav-link" >Home</a>
              </li>
               <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Categorias
                  </a>
                  <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                     <ul>
                          <?php require $this->checkTemplate("categories-menu");?>
                      </ul>  
                  </div>
                </li>
              <?php if( checkLogin(false) ){ ?>
              <li><a href="/profile" class="nav-link"> <?php echo getUserName(); ?></a></li>
              <li><a href="/logout" class="nav-link"> Sair </a></li>
                <?php }else{ ?>
             <li><a href="/login" class="nav-link"> Login</a></li>
                <?php } ?>

              <li class="nav-item divisor"></li>

              <li class="nav-item">
                <a href="/cart" class="nav-link">Meu Carrinho</a>
              </li>
              <li class="nav-item">
                <a href="" class="nav-link">Entrar</a>
              </li>
            </ul>
          </div>

        </div>
      </nav>
    </header><!--/fim Cabecalho -->

    <br/>
    <br/>
    <br/>

    

   
