<?php require "../bootstrap.php"; ?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title> Curso - PHP - Form </title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">       
        <link rel='stylesheet' type='text/css' media='screen' href='../assets/css/main.css'>

    </head>
    <body>
        <h1>Php - form</h2>
        
        <hr>
        <nav class="navbar navbar-expand-lg navbar-light bg-light justify-content-center">
        <ul class="nav ">
            <li class="nav-item">
            <a class="nav-link active" href="*?page=home">Home</a>
            </li>

            <li class="nav-item">
                <a class="nav-link active" href="*?page=user_create">Cadastro</a>
            </li>

            <li class="nav-item">
                <a class="nav-link active" href="*?page=contato">Contato</a>
            </li>

            </ul>
        </nav>
        <hr>        
        
        <div class="container">
            <?php 
                try{
                    require load();
                }catch(Exception $e){
                    echo $e->getMessage();
                }               
            ?>
        </div>
    </body>
</html>