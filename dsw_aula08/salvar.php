<?php
    if( isset( $_GET['acao']) && $_GET['acao'] == "primeiro"){ 
        $nome = $_GET['txtNome'];
        $idade = $_GET['txtIdade'];
        print "Nome: ".$nome."<br>";
        print "Idade: ".$idade."<br>";

    }

    if( isset( $_GET['acao']) && $_GET['acao'] == "segundo"){ 
        $empresa = $_POST['txtEmpresa'];
        $email = $_POST['txtEmail'];
        print "Empresa: ".$empresa."<br>";
        print "E-mail: ".$email."<br>";
    }

?>