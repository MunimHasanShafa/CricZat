<?php

    // class Post {
    //     private $error = "";
    //     public function create_post($data){
    //         if(!empty($data['post'])){

    //         }else{
    //             $this->error .= "Please write something to post. <br>";
    //         }
    //         return $this->error;
    //     }
    // }

    // session_start();
    // header('location: login.php');

    $con = mysqli_connect('localhost', 'root', '');
    mysqli_select_db($con, 'criczat');

    $post_text = $_POST['post_text'];
    

    $s = " select * from posts where email = '$email'";
    $result = mysqli_query($con, $s);
    $num = mysqli_num_rows($result);

    $reg = " insert into posts(postid, email, text, likes, date) values ('$postid', '$email', '$text', '$likes', '$date')";
    mysqli_query($con, $reg);

?>