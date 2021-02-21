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



    

$name_from_form = $_POST['name'];
$email = $_POST['Email'];
$adress =$_POST['adress'];
$phone_number = $_POST['phone_number'];
$product_id = $_POST['product_id'];

if(empty($name_from_form)){
    
    $name_error = "A name must be filled in to send data ";
    echo $name_error;
    die;}
    
    if(empty($email)){
       
        $email_error = "An emailadress must be filled in to send data";
        echo $email_error;
        die;}
        if(empty($adress)){
            
            
            $adress_error = "An adress must be filled in to send data";
            echo $adress_error;
            die;}
            if(empty($phone_number)){
                
                $phone_number_error = "A phone number must be filled in to send data";
                echo $phone_number_error;
                die;}



$store_of_costumers = $conn->prepare("INSERT INTO customers(names,email,addresses,phone)
VALUES('$name_from_form','$email','$adress','$phone_number')");
$store_of_costumers->execute();
$customers_id = $conn->lastInsertId();
$store_of_order=  $conn->prepare("INSERT INTO orders(product_id,customer_id)
VALUES('$product_id','$customers_id')");
$store_of_order->execute();
$order_id= $conn->lastInsertId();



echo "The order of your product is compleated. Your order number is $order_id. ";

?>

    
</body>
</html>