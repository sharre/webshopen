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
require_once ("database.php");
$Delete_message = "DELETE FROM  contact ";
    $statement = $conn->prepare($Delete_message);
    $statement->execute();
    echo "All messages deleted from the database  $dbName";
    ?>
    
</body>
</html>