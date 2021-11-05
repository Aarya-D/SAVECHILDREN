<?php
    $con = mysqli_connect('localhost','root','','save children user details');
    $phoneoremail = $_POST['phoneoremail'];
    $password = $_POST['password'];

    $check = mysqli_query($con,"UPDATE userdata SET password = '$password' WHERE phoneoremail = '$phoneoremail'");

    if($check > 0){
        header("Location:http://localhost/save children user details");
    }

?>