<?php

session_start();

include "conexao.php";

    $email = $_POST['email'];
    $senha = $_POST['senha'];

    $executa = "select * from usuario where email='$email' and senha='$senha'";

    $query = $mysqli->query($executa);

    while($dados=mysqli_fetch_object($query)){
        $usuario=$dados->id;
        $id_perfil_acesso=$dados->id_perfil_acesso;
       
    }

    $query->free();

    if(!empty($usuario)){
        header('Location: home.php');
        $_SESSION['autenticado'] = 'SIM';
        $_SESSION['id'] = $usuario;
        $_SESSION['id_perfil_acesso'] = $id_perfil_acesso;
        }else{
        $_SESSION['autenticado'] = 'NAO';
        header('Location: index.php?login=erro');
    }
?>