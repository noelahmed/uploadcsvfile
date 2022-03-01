<?php

    $servername = "localhost";
    $username = "nora";
    $password = "Nuwaira001";
    $db = "employee";
    try {
        //echo "ttw";
        //echo $db;
        $conn = mysqli_connect($servername, $username, $password, $db);
        //echo "Connected successfully";
    }
    catch(exception $e)
    {
        //echo "tt";
        echo "Connection failed: ";
    }
