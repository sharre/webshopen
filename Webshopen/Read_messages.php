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
$statement = $conn->prepare("SELECT *FROM contact  ");
$statement->execute();
    $result = $statement->fetchall(); //Innehallet i databasen hamtas och lagras i en array. 
    $table = "<table ><tr class=><th>Name</th><th>Email</th><th>Message</th><th></th></tr>";
foreach ($result as $key => $value) {
        $id = $value['contact_id'];
        $table .= "<tr>
<td>$value[names]</td>
<td>$value[email]</td>
<td>$value[messages]</td>
<td><a href= Radera_bestamt_meddelande.php?id=$id> Delete message</a> 

</tr>";
    }
    $table .= "</table>";
    echo $table;
    ?>
    <a href="Radera_samtliga_meddelanden.php"> Delete all messages</a>


    
</body>
</html>