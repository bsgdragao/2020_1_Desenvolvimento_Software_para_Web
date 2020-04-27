<?php
    session_start();

    if( isset($_SESSION['logado'] ) )
        unset( $_SESSION['logado'] );

    if( isset($_SESSION['nome_usuario'] ))
        unset( $_SESSION['nome_usuario'] );

    session_destroy();

    header("Location: index.php");

?>