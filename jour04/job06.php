<?php
if (isset($_GET["n1"])) {
if ($_GET["n1"] % 2 == 0) {
    echo "Vous avez mis un nombre pair";
}
else {
    echo "Vous avez mis un nombre impair";
}
}

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
    <input type="text" name="n1" placeholder="numéro 1">
    <input type="submit" name ="submit" value="envoyez">
   </form>

  <!--   <form action="" method="$_GET">
    <input type="text" name="nom" placeholder="nom">
    <input type="password" name="mdp" placeholder="password">
    <input type="submit" value="envoyez"> -->
   </form>
</body>
</html>