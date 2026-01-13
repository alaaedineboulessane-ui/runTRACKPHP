<?php
if (isset($_POST['reset'])) {
    setcookie("nbvisites", 0, time() + 3600);
    $_COOKIE['nbvisites'] = 0;
}

if (!isset($_COOKIE['nbvisites'])) {
    $nbvisites = 1;
} else {
    $nbvisites = $_COOKIE['nbvisites'] + 1;
}

setcookie("nbvisites", $nbvisites, time() + 3600);
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Compteur de visites</title>
</head>
<body>

<p>Nombre de visites : <?php echo $nbvisites; ?></p>

<form method="post">
    <button type="submit" name="reset">Reset</button>
</form>

</body>
</html>
