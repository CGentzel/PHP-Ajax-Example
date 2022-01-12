<?php
    $dsn = "mysql:dbname=travel_log; charset=utf8";
    $username = "root";
    $password = "";
    try {
        $conn = new PDO($dsn, $username, $password);
        $conn->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );
    }

    catch (PDOException $e){
        echo "Connection failed: " . $e->getMessage();
    }
?>