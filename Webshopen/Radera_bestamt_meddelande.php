<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
require_once ("database.php");
$id=$_GET['id'];
$Delete_messasge = "DELETE FROM contact WHERE contact_id=:contact_id";
$statement= $conn->prepare($Delete_messasge);
$statement->bindValue(':contact_id',$id);
$statement->execute();
echo "Messasge with id $id delated";








    ?>
    
</body>
</html>