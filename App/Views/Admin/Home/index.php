<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Admin Agito</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="/javascript/Admin/Home/home.js"></script>
    <link rel="stylesheet" type="text/css" href="/css/Admin/Home/home.css">
</head>
<body>
    <div>    
        <div>
        <form id="formInit" method="POST" action="/Admin/Home/auth">
            <div id="container">
                <input type="hidden" name="Admin"/>
                <label for="seuemail">Seu E-mail</label><input type="text" name="seuemail" id="seuemail" autofocus/>
                <label for="senha">Senha</label><input type="password" name="senha" id="senha"/>
                <input type="submit" value="Entrar"/>
            </div>
        </form>
<?php
require '../App/Views/footer.php';