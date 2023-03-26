<?php

    //host
    $host = "localhost";

    //database name
    $dbname = "auth-sys"; //authorization system

    //username
    $user = "root";

    //password
    $pass = "";

    $conn = new PDO("mysql:host=$host;dbname=$dbname;", $user, $pass);

    //  to check if database is created
    //if($conn ==true){
    //     echo "working";

    // }
    // else {
    //     echo "error";
    // }


?>