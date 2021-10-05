<?php


    session_start();
    $con = mysqli_connect('localhost', 'root', '');
    mysqli_select_db($con, 'criczat');
    $email = $_SESSION['criczat_email'];
    $likes = 0;
    $message1 =  mysqli_real_escape_string($con,$_POST['message']);

    if(empty($data['post'])){
        $user_contact_query="insert into posts(email, text, likes) values ('$email', '$message1', '$likes')";
        $user_contact_result=mysqli_query($con,$user_contact_query) or die(mysqli_error($con));
        header('location: posts.php');
    }else{
        
        header('location: posts.php');
    }
    
    
?>

