<?php
$reel = true;
$entier = 10;
$str = "Chaise";
$decimal = 3.9;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Variables</title>
    <style>
        table { border-collapse: collapse; width: 50%; }
        th, td { border: 1px solid black; padding: 8px; text-align: left; }
    </style>
</head>
<body>
    <h1>Hello LaPlateforme</h1>

    <table>
        <thead>
            <tr>
                <th>Type</th>
                <th>Nom</th>
                <th>Valeur</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td><?php echo gettype($reel); ?></td>
                <td>$reel</td>
                <td><?php echo $reel ? 'true' : 'false'; ?></td>
            </tr>
            <tr>
                <td><?php echo gettype($entier); ?></td>
                <td>$entier</td>
                <td><?php echo $entier; ?></td>
            </tr>
            <tr>
                <td><?php echo gettype($str); ?></td>
                <td>$str</td>
                <td><?php echo $str; ?></td>
            </tr>
            <tr>
                <td><?php echo gettype($decimal); ?></td>
                <td>$decimal</td>
                <td><?php echo $decimal; ?></td>
            </tr>
        </tbody>
    </table>
</body>
</html>
