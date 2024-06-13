<?php

    if(isset($_POST['submit']))
    {

    include_once('config.php');

    $nome = $_POST['nome'];
    $sobrenome = $_POST['sobrenome'];
    $idade = $_POST['idade'];
    $celular = $_POST['celular'];
    $principal = $_POST['principal'];
    $whatsapp = $_POST['whatsapp'];
    $email = $_POST['email'];
    $corporativo = $_POST['corporativo'];

    $result = mysqli_query($mysqli, "INSERT INTO user(nome,sobrenome,idade,celular,principal,whatsapp,email,corporativo) 
    VALUES ('$nome','$sobrenome','$idade','$celular','$principal','$whatsapp','$email','$corporativo')");
    }

?>
<!DOCTYPE html>
<html lang="en" data-bs-theme="dark">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link href="style.css" rel="stylesheet">
    <title>Cadastro</title>
</head>
<body class="d-flex align-items-center py-4 bg-body-tertiary">
    <main class="w-100 m-auto form-container">
        <form id="formValidation" action="index.php" method="POST">
            <h1 class="mb-3 fw-semibold">Cadastro de Funcionário</h1>
            <div class="row mb-3">
                <div class="col-md-4">
                    <label for="nome" class="form-label">Nome</label>
                    <input type="text" name="nome" class="form-control" id="nome" required />
                </div>
                <div class="col-md-4"> 
                    <label for="sobrenome" class="form-label">Sobrenome</label>
                    <input type="text" name="sobrenome" class="form-control" id="sobrenome" required />
                </div>
                <div class="col-md-2">
                    <label for="idade" class="form-label">Idade</label>
                    <input type="number" name="idade" class="form-control" id="idade" required />
                </div>
            </div>
            <div class="row mb-3">
                <div class="col-md-4"> 
                    <label for="celular" class="form-label">Celular</label>
                    <input type="text" name="celular" class="form-control" id="celular" placeholder="(XX) XXXXX-XXXX" required />
                </div>
                <div class="col-md-4">
                    <label for="principal" class="form-label">Principal</label>
                    <select name="principal" class="form-select" id="principal" required >
                        <option selected>Selecione</option>
                        <option value="1">Exemplo1</option>
                        <option value="2">Exemplo2</option>
                        <option value="3">Exemplo3</option>
                    </select>
                </div>
                <div class="col-md-4">
                    <label for="whatsapp" class="form-label">Whatsapp</label>
                    <select name="whatsapp" class="form-select" id="whatsapp" required >
                        <option selected>Selecione</option>
                        <option value="1">Exemplo1</option>
                        <option value="2">Exemplo2</option>
                        <option value="3">Exemplo3</option>
                    </select>
                </div>
            </div>
            <div class="row mb-3">
                <div class="col-md-8">
                    <label for="email" class="form-label">E-mail</label>
                    <input type="email" name="email" class="form-control" id="email" placeholder="email@exemplo.com" required />
                </div>
                <div class="col-md-4">
                    <label for="corporativo" class="form-label">Corporativo</label>
                    <select name="corporativo" class="form-select" id="corporativo" required >
                        <option selected>Selecione</option>
                        <option value="1">Exemplo1</option>
                        <option value="2">Exemplo2</option>
                        <option value="3">Exemplo3</option>
                    </select>
                </div>
            </div>
            <button type="submit" name="submit" onclick="validar()" class="btn btn-success py-2">Salvar</button>
        </form>
    </main>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.5/jquery.validate.min.js"></script>
    <script src="script.js"></script>
</body>
</html>