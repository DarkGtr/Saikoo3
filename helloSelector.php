<!DOCTYPE html>
    <head>
        <meta charset="UTF-8">
        <title>helloSelector</title>
    </head>
    <header>
        <a href="http://darkgtr.azurewebsites.net/index.html"><h1>HOME</h1></a><hr><br>
    </header>
    <body background = "http://thumbs.dreamstime.com/t/white-linen-texture-background-30801625.jpg">
        <h1> Where would you like to say hello? </h1><br><hr><br>
        <a href= "http://darkgtr.azurewebsites.net/helloPrinter.php?planet=Earth"><h2>Earth</h2></a><br>
        <a href= "http://darkgtr.azurewebsites.net/helloPrinter.php?planet=Mars"><h2>Mars</h2></a><br>
        <a href= "http://darkgtr.azurewebsites.net/helloPrinter.php?planet=Uranus"><h2>Uranus</h2></a><br><hr><br>
        <div>
            <?php
                $noproducts = "no products ";
                $specs = "specs";
                $mugs = "mugs";
                $SR = "specs and sausage rolls";

                for ($i = 1; $i < 31; $i++) {
                    if($i % 4 == 0){
                        ECHO "On the " . $i ." of the month specs and sausage rolls are available<br>";
                    } elseif($i % 2 == 0) {
                        ECHO "On the " . $i ." of the month mugs are available<br>";
                    } elseif ($i % 3 == 0){
                        ECHO "On the " . $i ." of the month specs are available<br>";
                    } else {
                        ECHO "On the " . $i ." of the month no products are available<br>";
                    }
                }
            ?>
        </div>
    </body>