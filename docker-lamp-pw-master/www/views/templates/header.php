<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link rel="stylesheet" href="assets/css/style.css" />

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</head>
<body>
    <header class="header">
        <h1>Exemplo 01</h1>
        <p>Exemplo de estrutura para utilizarmos na disciplina de PW!!</p>
    </header>
    <section class="row">
        <nav class="nav">
            <h2>Menu</h2>
            <a href="?controller=site&action=home" id="home">Home</a>
            <a href="?controller=site&action=about" id="about">Sobre</a>
            <a href="?controller=site&action=products" id="products">Produtos</a>
            <a href="?controller=site&action=contact" id="contact">Contato</a>
            <h2>Clientes</h2>
            <a href="?controller=client&action=insertClient" id="register">Cadastro</a>
            <a href="?controller=client&action=listClients" id="register">Listar Clientes</a>
        </nav>
        <article class="article">