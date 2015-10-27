<!DOCTYPE html>
    <head>
        <meta charset= "UTF-8">
        <title>Response</title>
    </head>
    <header>
        <a href="http://darkgtr.azurewebsites.net/index.html"><h1>HOME</h1></a><hr><br>
    </header>
<?php
    $forename = $_POST ["forename"];
    $surname = $_POST ["surname"];
        ECHO $forename . " " . $surname;
?>