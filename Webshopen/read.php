<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    
    require_once ('arrays.php');
    require_once ('database.php');
    $sql = $conn->prepare("SELECT *FROM products ");
    $sql->execute();
    $sql = $sql->fetchall(); //Innehallet i databasen hamtas
    //$cardresult= "";
    $cardresult2 = "";
    foreach ($sql as $key => $value){
        $id = $value['product_id'];
        $name = $value['name'];
            $price = $value['price'];
            $description = $value['description'];
            $image = $value['image'];
            $current_stock = rand(0,50);
           
        	$cardresult2.= "<div class='col-lg-3 col-md-6 mb-4'><div class='card h-100'>
              <img class='card-img-top' src='bilder/$image' alt=''><div class='card-body'><h4 class='card-title'>$name</h4>
              <p class='card-text'><h6><b> $price kr.</b></h6><br>$description<br>Stock-status: $current_stock in stock.<br>
              </p></div><div class='card-footer'><a href='Kop_produkt.php?id=$id' class='btn btn-primary'>Buy product
              </a></div></div></div>";    
            }
               // echo $cardresult;


        
    ?>
    <!--
</body>
</html>
<div class="col-lg-3 col-md-6 mb-4">
        <div class="card h-100">
          <img class="card-img-top" src="http://placehold.it/500x325" alt="">
          <div class="card-body">
            <h4 class="card-title">Card title</h4>
            <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sapiente esse necessitatibus neque.</p>
          </div>
          <div class="card-footer">
            <a href="#" class="btn btn-primary">Find Out More!</a>
          </div>
        </div>
      </div>
      -->