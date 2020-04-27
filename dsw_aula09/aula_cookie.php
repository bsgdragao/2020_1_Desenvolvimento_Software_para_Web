<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?php
        setcookie("user", "João da Silva", time() + 30 ) ;
    ?>
</head>
<body>
    <?php

        echo "Cookie user criado com sucesso! <br>";
        echo "User: ".$_COOKIE['user'] ;

//        $user = $_COOKIE['user'];
//        echo "User: $user " ;   
    ?>

    <a href="testar_cookie.php">Testar Cookie</a>

</body>
</html>