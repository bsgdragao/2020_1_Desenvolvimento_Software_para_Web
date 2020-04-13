<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Introdução PHP</title>
    <link href="estilo.css" rel="stylesheet" type="text/css" >
</head>
<body>
    <style>
        body{
           /* background: red;*/
        }
    </style>
    <?php
        $r = rand(0, 255);
        $g = rand(0, 255);
        $b = rand(0, 255);
        echo "
            <style>
                body{
                    background: rgb($r,$g,$b);
                }
            </style>
        ";
        
        echo ' olá "galerinha " ' ;
        $nome = 'Júlia';
        $altura = 1.52;
        $altura = $altura + 0.10;
        print '<br>'.$nome." tem ".$altura." metros de altura";

        // Comentário linha por linha 

        /*
            Comentário em bloco
        */

        $frase = "O rato roeu a roupa do rei da Espanha";
        print "<hr>".$frase."<br>";
        echo "Total de caracteres: ".strlen($frase)."<br>";
        echo "Total de palavras: ".str_word_count($frase)."<br>";
        echo strrev($frase)."<br>";


        echo '<hr>';

    ?>
    <form action="salvar.php" method="GET" >
        <input type="hidden" name="acao" value="primeiro" >
        Nome: <input type="text" name="txtNome" /> <br>
        Idade: <input type="number" name="txtIdade" /> <br>
        <input type="submit" value="Salvar" >
    </form> 

    <HR>

    <form action="salvar.php?acao=segundo" method="POST" >
        Empresa: <input type="text" name="txtEmpresa" /> <br>
        Email: <input type="email" name="txtEmail" /> <br>
        <input type="submit" value="Salvar" >
    </form> 
    
</body>
</html>