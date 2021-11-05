<?php
    $con = mysqli_connect('localhost','root','','save children user details');
    $phoneoremail = $_POST['phoneoremail'];
    $check = mysqli_query($con,"DELETE FROM userdetails WHERE phoneoremail='$phoneoremail'");

    if($check > 0){
        header("Location:http://localhost/save children user details/index.html");
    }

?>