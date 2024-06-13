<?php
    $hostname = "localhost";
    $bancodedados = "funcionarios";
    $usuario = "root";
    $senha = "";

    $mysqli = new mysqli($hostname, $usuario, $senha, $bancodedados);

    $nome = $_POST['nome'];
    $sobrenome = $_POST['sobrenome'];
    $idade = $_POST['idade'];
    $celular = $_POST['celular']; 
    $principal = $_POST['principal'];
    $whatsapp = $_POST['whatsapp'];
    $email = $_POST['email'];
    $corporativo = $_POST['corporativo'];
    
?>