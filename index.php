<?php
define ('MAX', 30);
define ('MIN', 5);
$pocet = rand(MIN, MAX);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
 <?php
 while ($pocet > 0) { 
     $pocet = $pocet - 1; 
     echo '<img src="https://www.niagara.sk/images/products/big-original/plysovy-mimon-jerry-minions-18-cm.jpg" width="100" height="50" alt="mimon"/>';
 }   
 ?>
</body>
</html>