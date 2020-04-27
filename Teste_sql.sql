CREATE TABLE categorias (
    codigo INT PRIMARY KEY NOT NULL AUTO_INCREMENT,
    nome VARCHAR(50)
    );
    
CREATE TABLE produtos (
    codigo INT PRIMARY KEY NOT NULL AUTO_INCREMENT,
    nome VARCHAR(50),
    preco DOUBLE ,
    quantidade DOUBLE ,
    codCategoria INT ,
    FOREIGN KEY (codCategoria) REFERENCES categorias(codigo)
    );

20:26

INSERT INTO categorias VALUES (1, "Bebidas") , (2, "Eletrônicos");

INSERT INTO produtos (nome, preco, quantidade, codCategoria) VALUES 
( "Coca-cola 2L", 5.99, 100, 1) , 
( "Fanta 2l", 4.99, 50, 1) ,
( "iPhone", 3900.00, 5, 2),
( "Sansung S20", 4500.99, 3, 2);


CREATE TABLE pedidos (
    codigo INT NOT NULL PRIMARY KEY AUTO_INCREMENT ,
    horario DATETIME , 
    endereco VARCHAR(200) ,
    codCliente INT ,
    FOREIGN KEY (codCliente) REFERENCES pessoas(codigo) 
    );
CREATE TABLE pedidos_produtos (
    codPedido INT PRIMARY KEY,
    codProduto INT PRIMARY KEY,
    preco DOUBLE , 
    quantidade DOUBLE ,
    FOREIGN KEY (codPedido) REFERENCES pedidos(codigo) ,
    FOREIGN KEY (codProduto) REFERENCES pprodutos(codigo)
    );

    CREATE TABLE pedidos_produtos (
    codPedido INT ,
    codProduto INT ,
    preco DOUBLE , 
    quantidade DOUBLE ,
    PRIMARY KEY (codPedido, codProduto) ,
    FOREIGN KEY (codPedido) REFERENCES pedidos(codigo) ,
    FOREIGN KEY (codProduto) REFERENCES pprodutos(codigo)
    );

    INSERT INTO pedidos VALUES 
( 1, "2020-04-19 14:50:25", "Rua a, 123" , 2) ,
( 2, "2020-04-20 21:24", "Rua a, 123 " , 1) ;

INSERT INTO pedidos_produtos (codPedido, codProduto, preco, quantidade) VALUES
(1, 1, 5.99, 2) ,
(1, 3, 3500, 1) ,
(2 , 1 , 5.5, 5 ) ,
(2, 3, 3.450, 1 ) ,
(2, 2 , 4.99, 10 ) ;

ELECT p.codigo, p.nome 
FROM produtos p
WHERE EXISTS ( SELECT pp.codProduto
               FROM pedidos_produtos pp
               WHERE pp.codProduto = p.codigo AND pp.quantidade > 0 );

21:49



SELECT p.codigo, p.nome , 
	(	SELECT SUM(pp2.quantidade) 
        FROM pedidos_produtos pp2 
     	WHERE pp2.codProduto = p.codigo 
    ) AS qtdVendida
FROM produtos p
WHERE EXISTS ( SELECT pp.codProduto
               FROM pedidos_produtos pp
               WHERE pp.codProduto = p.codigo AND pp.quantidade > 0 )
