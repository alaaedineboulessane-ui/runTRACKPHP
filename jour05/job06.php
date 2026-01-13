<?php

function leet($char) {
    $res = ""
    $lib = [4,3,1,0,5,7,1,8];
    $abc = ["a","e","i","o","s","t","l","b"]
    for ($i = 0, $i <= strlen($char),$i++) {
        if (strtolower($char[$i]) == $abc[0]) {
            $res.$lib[0];
        }
        elseif (strtolower($char[$i]) == $abc[1]) {
            $res.$lib[1];
        }
        elseif (strtolower($char[$i]) == $abc[2]) {
            $res.$lib[2];
        }
        elseif (strtolower($char[$i]) == $abc[3]) {
            $res.$lib[3];
        }
        elseif (strtolower($char[$i]) == $abc[4]) {
            $res.$lib[4];
        }
        elseif (strtolower($char[$i]) == $abc[5]) {
            $res.$lib[5];
        }
        elseif (strtolower($char[$i]) == $abc[6]) {
            $res.$lib[6];
        }
        elseif (strtolower($char[$i]) == $abc[7]) {
            $res.$lib[7];
        }
        else {
            $res.$char[i]
        }
    }
    return $res;
}
echo leet("aladin")
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