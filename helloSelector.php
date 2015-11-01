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
        <a href= "http://darkgtr.azurewebsites.net/helloPrinter.php?planet=Earth"><h2>Earth</h2></a>
        <a href= "http://darkgtr.azurewebsites.net/helloPrinter.php?planet=Mars"><h2>Mars</h2></a>
        <a href= "http://darkgtr.azurewebsites.net/helloPrinter.php?planet=Uranus"><h2>Uranus</h2></a><hr><br>
        <div>
            <?php
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
        <div>
            <?php
            //Set the stock levels
            $spec_stock = 7;
            $mug_stock = 7;
            $sausageroll_stock = 7;
            //Set the first date of the month
            $monthDate = 1;
            while(($spec_stock > 0) && ($mug_stock > 0) && ($sausageroll_stock > 0)) {
                $todaysGood = rand(0,2);
                //specs = 0
                //mugs = 1
                //sausagerolls = 2

                switch ($todaysGood) {
                    case 0:
                        $spec_stock--;
                        echo "On day " . $monthDate . " Specs are available";
                        break;
                    case 1:
                        $mug_stock--;
                        echo "On day " . $monthDate . " Mugs are available";
                        break;
                    case 2:
                        $sausageroll_stock--;
                        echo "On day " . $monthDate . " Sausage Rolls are available";
                        break;
                }
                $monthDate++; //puts the month forward by one day
            }
            echo "No more goods are available this month";
            ?>
        </div>
    </body>