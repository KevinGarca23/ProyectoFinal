<?php

include_once '../lib/helpers.php';
include_once '../view/partials/navbar.php';
include_once '../view/partials/header.php';

echo "<body>";

    echo "<div class='container'>";
            if (isset($_GET['modulo'])) {
            resolve();
            }else {
                include_once '../view/partials/content.php';
            }

        echo "</div>";
        include_once '../view/partials/footer.php';




?>

<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    

        <div class="container mt-5">
        <div class="row row-cols-1 row-cols-md-4 g-4">
          <div class="col">
            <div class="card bg-danger text-light">
              <div style="text-align: center">
                <img src="/ProyectoFinal1/view/img/Rambo.png" class="card-img-top personaje" alt="homer">
              </div>
              <div class="card-body">
                <h5 class="card-title bg-danger text-light">Jhon Velasquez</h5>
                <p class="card-text bg-danger">Alias el Rambo del php</p>
              <div class="btn-group m-1" role="group" aria-label="votacion">
                <button type="button" class="btn btn-primary" onclick="meGusta()">
                  <i class="bi bi-hand-thumbs-up"></i>
                </button>
                <button type="button" class="btn btn-dark" onclick="nomeGusta()" >
                  <i class="bi bi-hand-thumbs-down"></i>
                </button>
                <button type="button" class="btn btn-secondary">
                  Ver más
                </button>
              </div>
            </div>
          </div>
        </div>


        </body>
</html> -->

