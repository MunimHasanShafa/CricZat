<?php
    session_start();
    header('location: login.php');

    $con = mysqli_connect('localhost', 'root', '');
    mysqli_select_db($con, 'criczat');

    $firstName = $_POST['firstName'];
    $lastName = $_POST['lastName'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    $s = " select * from userTable where email = '$email'";
    $result = mysqli_query($con, $s);
    $num = mysqli_num_rows($result);

    if($num == 1){
        echo '<script>alert("Email Already Registered")</script>';
    }
    else{
        $reg = " insert into userTable(firstName, lastName, email, password) values ('$firstName', '$lastName', '$email', '$password')";
        mysqli_query($con, $reg);
        echo"registration successful";
    }


    // include("connect.php");
    // include("signin.php");
    // $firstName = "";
    // $lastName = "";
    // $email = "";


    // if($_SERVER['REQUEST_METHOD'] == 'POST'){

    //     $signup = new Signup();
    //     $result = $signup->evaluate($_POST);

    //     $firstName = $_POST['firstName'];
    //     $lastName = $_POST['lastName'];
    //     $email = $_POST['email'];
    // }

    

?>