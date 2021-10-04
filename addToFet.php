<?php
    

    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "criczat";
    $conn = new mysqli($servername, $username, $password, $dbname);
    session_start();

    $title = $_POST['fet_title'];
    $name = $_POST['name'];
    $text = $_POST['fet_body'];
    $image = $_FILES['fet_image']['name'];
    $temp = $_FILES['fet_image']['tmp_name'];
    $folder = "image/".$image;
    

    $s = "insert into features (title, name, text, image) values ('$title','$name', '$text', '$image')";

    move_uploaded_file($temp, $folder);
    $result = $conn->query($s);
    header('location: editorial.php');
    

?>