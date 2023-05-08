<?php

require_once 'db.php';

var_dump($products);


?>
<!DOCTYPE html>
<html lang="it">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PHP OOP Shop</title>

  <!-- bootstrap -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">

  <!--
    Immaginare quali sono le classi necessarie per creare uno shop online con le seguenti caratteristiche:
    - L'e-commerce vende prodotti per animali.
    - I prodotti sono categorizzati, le categorie sono Cani o Gatti.
    - I prodotti saranno oltre al cibo, anche giochi, cucce, etc.
 -->

 <!-- fontawesome-->
 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
  <div class="container-fluid">
    <h1 class="mt-4">
      Animal Shop 
    </h1>

    <div class="row">

      <?php
      foreach($products as $singleProduct) {
      ?>
      <div class="col-6">
        <div class="card" style="width: 18rem;">
          <div class="card-body">

            <h5 class="card-title">
              <?= $singleProduct->getName() ?> 
              <small><i class="fa-solid <?= $singleProduct->getCategory()->getIcon() ?>"></i></small>
            </h5>

            <p>
              <?php

              switch(get_class($singleProduct)) {

                case 'Food':
                  echo "Ingredienti: " . $singleProduct->getIngredients();
                  break;

                case 'Toy':
                  echo "Materiale: " .  $singleProduct->getMaterial();
                  break;

                default: 
                  echo "<br>";
                  break;
              }

              ?>
            </p>

            Prezzo: <?= $singleProduct->getPrice() ?>€
            <br>
            <a href="#" class="btn btn-primary">Acquista</a>
          </div>
        </div>
      </div>
      <?php
      }
      ?>  
    </div>
  </div>


  <!-- bootstrap -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>


</body>
</html>