<?php

for ($i = 0; $i <= 1000; $i++) {
    $prime = true; 

    for ($j = 2; $j < $i; $j++) {
        if ($i % $j == 0) {
            $prime = false; 
            break;
        }
    }

    if ($prime) {
        echo "$i<br>";
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