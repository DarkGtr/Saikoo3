<!DOCTYPE html>
    <head>
        <meta charset= "UTF-8">
        <title>Response</title>
    </head>
    <header>
        <a href="http://darkgtr.azurewebsites.net/index.html"><h1>HOME</h1></a><hr><br>
    </header>
    <body background = "http://thumbs.dreamstime.com/t/white-linen-texture-background-30801625.jpg">
        <?php
            $forename = $_POST ["forename"];
            $surname = $_POST ["surname"];
            ECHO "<h1>$forename</h1>" . " " . "<h1>$surname</h1>";
        ?>
    </body>
