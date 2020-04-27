<?php
    
    $usuario_cadastrado = "admin";
    $senha_cadastrada = "123";

    $user = $_POST['user'];
    $senha = $_POST['senha'];

    if( $user == $usuario_cadastrado && $senha == $senha_cadastrada ){
        session_start();
        $_SESSION["logado"] = TRUE;
        $_SESSION["nome_usuario"] = $user;
        header( "Location: login.php" );
    }else{
        header( "Location: login.php?erroNoLogin" );
    }
?>