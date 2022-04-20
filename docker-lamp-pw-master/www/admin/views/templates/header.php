<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link rel="stylesheet" href="../../../assets/css/style.css" />

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</head>
<body>
    <header class="header">
        <h1>Minha Área Administrativa</h1>
        <p>Exemplo de estrutura ADMIN...</p>
    </header>
    <section class="row">
        <nav class="nav">
            <h2>Menu</h2>
            <a href="?controller=main&action=index" id="home">Home</a>
            <a href="index.php?controller=main&action=logout">Logout</a>
            <h2>Clientes</h2>
            <a href="?controller=clients&action=listClients" id="register">Listar clientes</a>
            <a href="?controller=clients&action=insertClient" id="newClient">Novo cliente</a>
        </nav>
        <article class="article">