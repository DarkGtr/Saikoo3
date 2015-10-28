<!DOCTYPE html>
    <head>
        <meta charset="UTF-8">
        <title>helloPrinter</title>
    </head>
    <header>
        <a href="http://darkgtr.azurewebsites.net/index.html"><h1>HOME</h1></a><hr><br>
    </header>
    <body background = "http://thumbs.dreamstime.com/t/white-linen-texture-background-30801625.jpg">
        <?php
            $query = $_GET ["planet"];
            ECHO " <h2>Hello</h2> " . "<h2>$query</h2>";
        ?>
    </body>
