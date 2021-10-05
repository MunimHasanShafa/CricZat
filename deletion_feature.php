<?php
    

    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "criczat";
    $conn = new mysqli($servername, $username, $password, $dbname);
    session_start();

    $id = $_POST['feature_id'];
    
    

    $s = "delete from features where featureId = $id";

    move_uploaded_file($temp, $folder);
    $result = $conn->query($s);
    echo $s;
    header('location: editorial.php');
    

?>