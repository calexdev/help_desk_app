<?php 

require_once "validador_acesso.php";

include "conexao.php";

$executa = "SELECT * FROM chamado order by id_chamado_usuario";

$query=$mysqli->query($executa);


?>

<html>
  <head>
    <meta charset="utf-8" />
    <title>App Help Desk</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <style>
      .card-consultar-chamado {
        padding: 30px 0 0 0;
        width: 100%;
        margin: 0 auto;
      }
    </style>
  </head>

  <body>

    <nav class="navbar navbar-dark bg-dark">
      <a class="navbar-brand" href="#">
        <img src="logo.png" width="30" height="30" class="d-inline-block align-top" alt="">
        App Help Desk
      </a>

      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" href="logoff.php">Logoff</a>
        </li>
      </ul>
    </nav>

    <div class="container">    
      <div class="row">

        <div class="card-consultar-chamado">
          <div class="card">
            <div class="card-header">
              Consulta de chamado
            </div>
            
            <div class="card-body">

              <?php
              while($dados=mysqli_fetch_object($query)) {
              $id_chamado_usuario=$dados->id_chamado_usuario;

              if ($_SESSION['id_perfil_acesso'] == 2) {
              
                if ($id_chamado_usuario != $_SESSION['id']) {
                  continue;
                }
              }
             
              ?>       
              <div class="card mb-3 bg-light">
                <div class="card-body">
                  <h5 class="card-title"><?php echo $dados->titulo ?></h5>
                <!--  <h6 class="card-subtitle mb-2 text-muted"><?php echo $dados->id_chamado_usuario ?></h6>  saber o usuario que criou -->
                  <h6 class="card-subtitle mb-2 text-muted"><?php echo $dados->categoria ?></h6>
                  <p class="card-text"><?php echo $dados->descricao ?></p>
                </div>
              </div>
              <?php  } ?>
              
              <div class="row mt-5">
                <div class="col-6">
                  <a class="btn btn-lg btn-warning btn-block" href="home.php">Voltar</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </body>
</html>