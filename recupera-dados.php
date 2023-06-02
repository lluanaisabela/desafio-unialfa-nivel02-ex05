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
    <main>
        <?php
        if (!empty($_POST)){
            $nome = $_POST["nome"] ?? NULL;
            $email = $_POST["email"] ?? NULL;
            $idade = $_POST["idade"] ?? NULL;
            $hobbie = $_POST["hobbie"] ?? NULL;
            if (strlen($nome) < 6){
                echo"Nome invalido, quantidade de caracteres menos que 6!";
            }
            if($idade < 18){
                echo "Idade deve ser maior que 18 anos!";
            
            }
        }
        ?>
       <table class="table">
        <th><?=$nome?></th>
        <th><?=$email?></th>
        <th><?=$idade?></th>
        <th><?=$hobbie?></th>
       </table>
        <a href="index.php" class="btn btn-primary">VOLTAR</a>
    </main>
</body>