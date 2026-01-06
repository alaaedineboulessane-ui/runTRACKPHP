<?php

for ($i = 0; $i <= 100; $i++) {
    if ($i % 3 == 0 && $i % 5 == 0) {
        echo "FizzBuzz<br>";
    }
    elseif ($i % 3 == 0) {
        echo "Fizz<br>";
    }
    elseif ($i % 5 == 0) {
        echo "Buzz<br>";
    }
    else {
        echo $i."<br>"; 
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