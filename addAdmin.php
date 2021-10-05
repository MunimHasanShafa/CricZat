<?php
    

    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "criczat";
    $conn = new mysqli($servername, $username, $password, $dbname);
    session_start();

    $title = $_POST['admin_name'];
    $name = $_POST['email'];
    $text = $_POST['desc'];
    $image = $_FILES['admin_image']['name'];
    $temp = $_FILES['admin_image']['tmp_name'];
    $folder = "image/".$image;
    

    $s = "insert into team (name, email, description, image) values ('$title','$name', '$text', '$image')";

    move_uploaded_file($temp, $folder);
    $result = $conn->query($s);
    echo $s;
    header('location: editorial.php');
    

?>