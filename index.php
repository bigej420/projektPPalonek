<?php 

    $con = mysqli_connect("localhost","root","","db");

    if (!$con) {
        echo"Connection Error...";
    } else {
        echo"Connected...";
    }
    

?>
