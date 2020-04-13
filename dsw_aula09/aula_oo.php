<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="estilo.css" >
</head>
<body>

    <?php  require_once "menu.php"; ?>

    <h1>Aula OO</h1>

    <?php
        include_once "clsProduto.php";

        $p1 = new Produto(NULL, "Pepsi", 5);
        $p1->imprimirNomePreco();
        echo "<hr>";

        $p1->atualizarPreco(10);
        $p1->imprimirNomePreco();
        
        $preco = $p1->consultarNovoPreco(10);
        echo "Novo Preco: ".$preco."<hr>";
        $p1->imprimirNomePreco();

    ?>
    
</body>
</html>