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
               /* for ($i = 1; $i < 31; $i++) {
                    if($i % 4 == 0){
                        ECHO "On the " . $i ." of the month specs and sausage rolls are available<br>";
                    } elseif($i % 2 == 0) {
                        ECHO "On the " . $i ." of the month mugs are available<br>";
                    } elseif ($i % 3 == 0){
                        ECHO "On the " . $i ." of the month specs are available<br>";
                    } else {
                        ECHO "On the " . $i ." of the month no products are available<br>";
                    }
                } */
            ?>
        </div>
        <div><hr><br>
            <?php
               /* $fav_bands = array();
                array_push($fav_bands, "Katy Perry");
                array_push($fav_bands, "The Peapods");
                array_push($fav_bands, "Nickelback");
                PRINT $fav_bands ;*/
            ?>
        </div>
        <div>
            <?php
                $db = new mysqli(
                    "eu-cdbr-azure-north-d.cloudapp.net",
                    "b3b05dd89d443d",
                    "79fb579e",
                    "db1400003"
                );
                if ($db -> connect_errno) {
                    die('connectfailed[' . $db->connect_error . ']');
                }

                $sql_query = "SELECT * FROM marvelmovies WHERE title LIKE 'Captain%'";
                $result = $db->query($sql_query);
                WHILE ($row = $result->fetch_array()) {
                    echo  "<p>" . $row['title'] . "</p>";
                }
            ?>
        </div><br><hr><br>
        <div>
            <?php
                $sql_2010 = "SELECT * FROM marvelmovies WHERE yearReleased < 2010";
                $result = $db->query($sql_2010);
                WHILE ($row = $result->fetch_array()) {
                    ECHO "<p>" . $row['title'] . "</p>";
                }


                $result->close();
                $db->close();
            ?>
        </div>
    </body>