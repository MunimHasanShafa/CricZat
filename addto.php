<?php
    // session_start();

    // $con = mysqli_connect('localhost', 'root', '');
    // mysqli_select_db($con, 'criczat');

    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "criczat";
    $conn = new mysqli($servername, $username, $password, $dbname);
    session_start();

    $title = $_POST['title'];
    $news = $_POST['news_body'];
    $image = $_FILES['image']['name'];
    $temp = $_FILES['image']['tmp_name'];
    $folder = "image/".$image;
    
    print_r($folder);

    $s = "insert into news (title, text, image) values ('$title', '$news', '$image')";
    print_r($s);
    //$result = mysqli_query($con, $s);
    move_uploaded_file($temp, $folder);
    $result = $conn->query($s);
    print_r($result);

    
    // $num = mysqli_num_rows($result);
    

    

?>