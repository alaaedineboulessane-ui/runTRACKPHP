<?php

for ($i = 0; $i <= 100; $i++) {
    if ($i <= 20 && $i >= 0) {
        echo "<em>".$i."</em><br>";}
    elseif ($i <= 50 && $i >= 25) {
        echo "<u>".$i."</u><br>";
        if ($i == 42) {
            echo "La Plateforme_<br>";
        }
    }
}

?>

<!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>
    <body>
        <header>
            <h1> <?php 
                echo("hello Laplateforme");
                ?>
            </h1>

        </header>
        <main>

        </main>
        <footer>

        </footer>
    
    </body>
    </html>