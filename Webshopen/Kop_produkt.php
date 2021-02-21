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
    require_once ('database.php');
    $id = $_GET['id'];
    $show_product = "SELECT * FROM  products WHERE product_id=:product_id";
    $statement=$conn->prepare($show_product);
    $statement->bindValue(':product_id', $id);
    $statement->execute();
    $product= $statement->fetchall();
    foreach($product as $key => $value){
        echo $value['name'];
        echo"<br>";
        echo $value['description'];
        echo"<br>";

        echo $value['price']."kr";
    echo "<br>";
  } 
    

    

    


    
    ?>
<form action="Lagra_bestallning.php" method="post">
        <fieldset>
            <legend> Order form</legend>
            <label for="name"> Name </label>
            <input type="text" name="name"><br>
            <label for="Email"> Email </label>
            <input type="text" name="Email" > <br>
            <lable for="adress"> Adress </label>
            <input type="text" name="adress"><br>
            <label for="phone_number"> Phone number </label>
            
            <input type="text" name="phone_number"><br>
            <input type="hidden" name="product_id" value="<?php echo $id?>">
            <input type="submit" name="submit" id="button" value="send order">
        </fieldset>
    </form>
    

    
    
</body>
</html>