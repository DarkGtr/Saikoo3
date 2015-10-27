<!DOCTYPE html>
    <head>
        <meta charset="UTF-8">
        <title>helloSelector</title>
    </head>
    <body>
        <h1> Where would you like to say hello? </h1><br><hr><br>
        <a href= "http://darkgtr.azurewebsites.net/helloPrinter.php?planet=Earth">Earth</a><br>
        <a href= "http://darkgtr.azurewebsites.net/helloPrinter.php?planet=Mars">Mars</a><br>
        <a href= "http://darkgtr.azurewebsites.net/helloPrinter.php?planet=Uranus">Uranus</a>
        <?php
            $x  = 0;
            while($x < 31){
                $x++;
                if($x / 2){
                    echo "on the " . $x . "st of the month/2";
                }elseif($x / 3){
                    echo "on the " . $x . "st of the month/3";
                }elseif($x / 4){
                    echo "on the " . $x . "st of the month/4";
                }

            }
        ?>
    </body>