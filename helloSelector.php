<!DOCTYPE html>
    <head>
        <meta charset="UTF-8">
        <title>helloSelector</title>
    </head>
    <body>
        <h1> Where would you like to say hello? </h1><br><hr><br>
        <a href= "http://darkgtr.azurewebsites.net/helloPrinter.php?planet=Earth">Earth</a><br>
        <a href= "http://darkgtr.azurewebsites.net/helloPrinter.php?planet=Mars">Mars</a><br>
        <a href= "http://darkgtr.azurewebsites.net/helloPrinter.php?planet=Uranus">Uranus</a><br><hr><br>
        <div>
            <?php
                $myarray = array("no products", "specs", "mugs", "specs and sausage rolls");
                for ($i = 1; $i < 31; $i++) {
                    ECHO "on the" . $i . " of the month" . $myarray . " are available<br>";
                }
            ?>
        </div>
    </body>