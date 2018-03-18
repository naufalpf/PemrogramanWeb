<?php
    $host="localhost";
    $username = "yzjvincb_web2017";
    $password = "luar.biasa";
    $dbname = "yzjvincb_allquiz";
    
    $conn = mysqli_connect($host, $username, $password, $dbname);
    
    if (!$conn) die ("koneksi db error");

?>