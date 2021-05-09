<?php
    $conn = mysqli_connect('localhost','root',"",'cartsystem');
    if($conn->connect_error){
        die("Connection Failed!".$conn->connect_error);
    }
?>