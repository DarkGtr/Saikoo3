<!DOCTYPE html>
    <head>
        <meta charset="UTF-8">
        <title>Marvels</title>
    </head>
    <header>
        <a href="http://darkgtr.azurewebsites.net/index.html"><h1>HOME</h1></a><hr><br>
    </header>
    <body background = "http://thumbs.dreamstime.com/t/white-linen-texture-background-30801625.jpg">
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

        if($_GET ["$search"] == "G2010"){
        $search = "SELECT * FROM marvelmovies WHERE yearReleased < 2010";
        $result = $db->query($search);
        WHILE ($row = $result->fetch_array())
            ECHO $row;
        }

        if($_GET ["$search"] == "MS"){
        $search = "SELECT * FROM marvelmovies WHERE productionStudio = Marvel Studios";
        $result = $db->query($search);
        WHILE ($row = $result->fetch_array())
            ECHO $row;
        }

        if($_GET ["$search"] == "L2010"){
        $search = "SELECT * FROM marvelmovies WHERE yearReleased > 2010";
        $result = $db->query($search);
        WHILE ($row = $result->fetch_array())
            ECHO $row;
        }

        if($_GET ["$search"] == "Oscar"){
        $search = "SELECT * FROM marvelmovies WHERE notes LIKE '%Oscars%'";
        $result = $db->query($search);
        WHILE ($row = $result->fetch_array())
            ECHO $row;
        }


        ?>
    </body>
