<?php
    $con = mysqli_connect('localhost','root','','save children user details');
    $id = $_POST['id'];
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $birthdate = $_POST['birthdate'];
    $phoneoremail = $_POST['phoneoremail'];
    $address = $_POST['address'];
    $newpassword = $_POST['newpassword'];

    $check_data = mysqli_query($con,"SELECT * FROM userdetails WHERE phoneoremail = '$phoneoremail'");
    $check = mysqli_num_rows($check_data);

    if($check > 0){
        header("Location:http://localhost/save children user details");
    }else{
        $input = mysqli_query($con,"INSERT INTO userdetails(id,firstname,lastname,birthdate,phoneoremail,address,newpassword)VALUES('$id','$firstname','$lastname','$phoneoremail','$password')");
        if($input){
            header("Location:http://localhost/save children user details/index.html");
        }
    }

?>