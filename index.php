<!DOCTYPE html>
<html lang="en" xmlns:th="http://www.thymeleaf.org">
<head>
    <meta charset="UTF-8">
    <title>Exercicio 05</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
</head>
<body>
<body>
<div class="container">
<h1 class="text-center">Olá Profe, esse eu caprichei tá</h1>
<form action="recupera-dados.php" method="post">

    <label for="nome">Seu nome:</label>
    <input class="form-control" type="text" name="nome" id="nome" class="form">
    
    <label for="email">Seu e-mail:</label>
    <input class="form-control" type="email" name="email" id="email" class="form">

    <label for="idade">Sua idade:</label>
    <input class="form-control" type="number" min="0" name="idade" id="idade" class="form">

    <label for="nome">Hobbie:</label>
    <input class="form-control" type="text" name="hobbie" id="hobbie" class="form">

    <button type="submit" class="btn btn-primary">Enviar</button>

</form>
</div>
</body>
</html>