<!DOCTYPE html>
    <head>
        <meta charset="UTF-8">
        <title>helloPrinter</title>
    </head>
    <header>
        <a href="http://darkgtr.azurewebsites.net/index.html"><h1>HOME</h1></a><hr><br>
    </header>
    <body>
        <?php
            $query = $_GET ["planet"];
            ECHO " Hello " . $query;
        ?>
    </body>
