<!DOCTYPE html>
    <head>
        <meta charset="UTF-8">
        <title>helloSelector</title>
    </head>
    <header>
        <a href="http://darkgtr.azurewebsites.net/index.html"><h1>HOME</h1></a><br><hr><br>
    </header>
    <body>
        <h1> Where would you like to say hello? </h1><br><hr><br>
        <a href= "http://darkgtr.azurewebsites.net/helloPrinter.php?planet=Earth">Earth</a><br>
        <a href= "http://darkgtr.azurewebsites.net/helloPrinter.php?planet=Mars">Mars</a><br>
        <a href= "http://darkgtr.azurewebsites.net/helloPrinter.php?planet=Uranus">Uranus</a><br><hr><br>
        <div>
            <?php
                $noproducts = "no products ";
                $specs = "specs";
                $mugs = "mugs";
                $SR = "specs and sausage rolls";
                for ($i = 1; $i < 31; $i++) {
                    ECHO "on the " . $i . " of the month " . $noproducts . " are available<br>".
                    "on the " . $i . " of the month " . $specs . " are available<br>".
                    "on the " . $i . " of the month " . $mugs . " are available<br>".
                    "on the " . $i . " of the month " . $SR . " are available<br>";
                }
            ?>
        </div>
    </body>