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
        ini_set('display_errors', 1);
        ini_set('display_startup_errors', 1);
        error_reporting(E_ALL);
        $db = new mysqli(
            "eu-cdbr-azure-north-d.cloudapp.net",
            "b3b05dd89d443d",
            "79fb579e",
            "db1400003"
        );
        if ($db -> connect_errno) {
            die('connectfailed[' . $db->connect_error . ']');
        }
       // echo "<p>" . $_POST['search'] . "</p>";
        if($_GET['search'] == "G2010"){
        $search = "SELECT * FROM marvelmovies WHERE yearReleased < 2010";
        $result = $db->query($search);
        WHILE ($row = $result->fetch_array())
            echo  "<p>" . $row['title'] . "</p>";
        }

        if($_GET['search'] == "MS"){
        $search = "SELECT * FROM marvelmovies WHERE productionStudio LIKE 'Marvel Studios'";
        $result = $db->query($search);
        WHILE ($row = $result->fetch_array())
            echo  "<p>" . $row['title'] . "</p>";
        }


        if($_GET['search'] == "L2010"){
        $search = "SELECT * FROM marvelmovies WHERE yearReleased > 2010";
        $result = $db->query($search);
        WHILE ($row = $result->fetch_array())
            echo  "<p>" . $row['title'] . "</p>";
        }

        if($_GET["search"] == "Oscar"){
        $search = "SELECT * FROM marvelmovies WHERE notes LIKE '%Oscar%'";
        $result = $db->query($search);
        WHILE ($row = $result->fetch_array())
            echo  "<p>" . $row['title'] . "</p>";
        }
            $result->close();
           $db->close();
        ?>
    </body>