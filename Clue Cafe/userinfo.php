<?php

    $servername = "localhost";
    $username = "root";
    $password = "0000";
    $dbnme = "MYDB";

    $conn = mysqli_connect($servername, $username, $password,$dbnme);


    if($conn){
        echo("Successful");
    }else{
        echo("Failed");
    }

        $user = $_POST["user"];
        $email = $_POST["email"];
        $mobile = $_POST["mobile"];
        $timing = $_POST["timing"];
        $people = $_POST["people"];

    $query = "insert into userinfo(user,email,mobile,timing,people)
     values('$user','$email','$mobile','$timing','$people')";
    $query_run = mysqli_query($conn, $query);

    header("location:home.php");

 ?>


 
