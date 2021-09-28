<?php
    session_start();

    $con = mysqli_connect('localhost', 'root', '');
    mysql_select_db($con, 'criczat');

    $firstName = $_POST['firstName'];
    $lastName = $_POST['lastName'];
    $email = $_POST['email'];
    $pass = $_POST['password'];

    $s = " select * from userTable where email = '$email'";
    $result = mysqli_query($con, $s);
    $num = mysqli_num_rows($result);

    if($num == 1){
        echo "email already registered";
    }
    else{
        $reg = " insert into userTable(firstName, lastName, email, password) values ('$firstName', '$lastName', '$email', '$pass')";
        print_r($reg);
        mysqli_query($con, $reg);
        echo"registration successful";
    }


?>