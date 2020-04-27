<div id="menu">
    <a href="aula_oo.php"><button>Aula OO</button></a>
    <a href="aula_cookie.php"><button>Aula Cookie</button></a>
    <a href="categorias.php"><button>Categorias</button></a>
    
    <?php
        if( session_status() != PHP_SESSION_ACTIVE ){
            session_start();
        }

        if(  isset( $_SESSION['logado']) && $_SESSION['logado']  ){
            echo "Olá ". $_SESSION['nome_usuario']; 
            echo ' <a href="deslogar.php"><button>Sair</button></a> ';
        }else{
            echo ' <a href="login.php"><button>Login</button></a> ';
        }

    ?>


    
</div>