<?php


function gethello() {
    return "Hello La Plateforme"
}

echo gethello()

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $name ?></title>
</head>
<body>
   <form action="" method="$_GET">
    <input type="text" name="nom" placeholder="nom">
    <input type="password" name="mdp" placeholder="password">
    <input type="submit" name ="submit" value="envoyez">
   </form>

  <!--   <form action="" method="$_GET">
    <input type="text" name="nom" placeholder="nom">
    <input type="password" name="mdp" placeholder="password">
    <input type="submit" value="envoyez"> -->
   </form>
</body>
</html>