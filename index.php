<?php
require 'get.php'; // submit info db
?>
<!DOCTYPE html>
<html lang="pt-BR">

<head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>AJAX</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
                integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh"
                crossorigin="anonymous">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"
                integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN"
                crossorigin="anonymous">
        <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"
                integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p"
                crossorigin="anonymous" />
        <link rel="stylesheet" href="css/style.css">
</head>

<body>
        <section class="card1">
                <div class="img">
                        <img src="imgs/like.png" height="300">
                </div>
                <div class="text">
                        <h5>Titulo: Projeto AJAX</h5>
                        <p>Resumo: Like com ajax</p>
                        <p>Localidade: Socorro</p>
                        <p>Data 01/12/2020</p>
                </div>
                <div class="btn1">
                        <form method="get">
                                <button class="btn btn-primary btn-sm" id="bt1-cont" onclick="return false;">Contato</button>
                                <button id="likebt" class="btn btn-primary btn-sm"><i class="fas fa-thumbs-up"></i></button>
                                <button id="likeye" class="btn btn-primary btn-sm" onclick="return false;"></button>
                                <button id="unlikebt" class="btn btn-primary btn-sm"><i class="fas fa-thumbs-down"></i></button>
                                <button id="likeno" class="btn btn-primary btn-sm" onclick="return false;"></button>
                        </form>
                </div>
        </section>
        <script src="js/main.js"></script>
</body>

</html>
