<?php

    include "conexao.php";

    session_start();

    $id_chamado_usuario  = $_SESSION['id'];
    $titulo = $_POST['titulo'];
    $categoria = $_POST['categoria'];
    $descricao = $_POST['descricao'];
   
    $executa = "INSERT INTO chamado(id_chamado_usuario, titulo, categoria, descricao) VALUE ('$id_chamado_usuario', '$titulo', '$categoria', '$descricao')";

    $query = $mysqli->query($executa);

    //criar uma pagina informando que o chamado foi aberto corretamente

    //direcionando para a pagina abrir chamado
    header('Location: abrir_chamado.php');
?>