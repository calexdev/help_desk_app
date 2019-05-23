<?php
    require_once "validador_acesso.php";
?>
<html>
  <head>
    <meta charset="utf-8" />
    <title>App Help Desk</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <style>
      .card-login {
        padding: 30px 0 0 0;
        width: 450px;
        margin: 0px auto;
      }
    </style>
  </head>

  <body>

    <nav class="navbar navbar-dark bg-dark">
      <a class="navbar-brand" href="#">
        <img src="logo.png" width="30" height="30" class="d-inline-block align-top" alt="">
        Help Desk
      </a>
    </nav>

    <div class="container">    
      <div class="row">

        <div class="card-login">
          <div class="card">
            <div class="card-header">
              Login
            </div>
            <div class="card-body">
              <form method="post" action="">

                <div class="form-group">
                  <input type="text" name="nome" class="form-control" placeholder="Nome" required="nome">
                </div>
                <div class="form-group">
                  <input type="email" name="email" class="form-control" placeholder="E-mail" required="email">
                </div>
                <div class="form-group">
                  <input type="password" name="senha" class="form-control" placeholder="Senha" required="senha">
                </div>
                <div class="form-group">
                  <input type="password" name="senha" class="form-control" placeholder="Confirme a senha" required="senha">
                </div>
  
                <button class="btn btn-lg btn-info btn-secundary" style="width:201px;" type="submit">Gravar</button>
                <button class="btn btn-lg btn-info btn-secundary" style="width:201px;" type="reset">Limpar</button>
               
                <hr>
                <div class="form-group" style="margin-left: 180px" >
                    <a href="home2.php">Voltar</a>
                </div>
              </form>
            </div>
          </div>
        </div>
    </div>
  </body>
</html>