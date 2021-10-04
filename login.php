<?php

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
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login/Register</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <div class="container nav-image" id="header-section">
            <a href="index.php"><img src="logos/footer.png" alt=""></a>
        </div>

        <div class="login-section">
            <div id='login-form'class='login-page'>
                <div class="form-box">
                    <div class='button-box'>
                        <div id='btn'></div>
                        <button type='button'onclick='login()'class='toggle-btn' id="login-btn">Log In</button>
                        <button type='button'onclick='register()'class='toggle-btn' id="reg-btn">Register</button>
                    </div>
                    
                <form action="userlogin.php" method="post">
                    <div id='login' class='input-group-login'>
                        <input type='email' name='email' class='input-field' placeholder='Email Id' required>
                        <input type='password' name='password' class='input-field' placeholder='Enter Password' required>
                        <button type='submit'class='submit-btn'>Log in</button>
                    </div>
                </form>
             
                <form action="registration.php" method="post">
                    <div id='register' class='input-group-register'>
                        <input value="<?php echo $firstName ?>" type='text' name='firstName' class='input-field' placeholder='First Name' required>
                        <input value="<?php echo $lastName ?>" type='text' name='lastName' class='input-field' placeholder='Last Name ' required>
                        <input value="<?php echo $email ?>" type='email' name='email' class='input-field' placeholder='Email Id' required>
                        <input type='password' name='password' class='input-field' placeholder='Enter Password' required>
                        <button type='submit'class='submit-btn'>Register</button>
                    </div>   
                 </form>
                </div>
            </div>
        </div>
        <script>
            var x=document.getElementById('login');
            var y=document.getElementById('register');
            var z=document.getElementById('btn');
            function register()
            {
                x.style.left='-400px';
                y.style.left='50px';
                z.style.left='110px';
                document.getElementById('login-btn').style.color = "black";
                document.getElementById('reg-btn').style.color = "white";
            }
            function login()
            {
                x.style.left='50px';
                y.style.left='450px';
                z.style.left='0px';
                document.getElementById('login-btn').style.color = "white";
                document.getElementById('reg-btn').style.color = "black";
            }
        </script>
        <script>
            var modal = document.getElementById('login-form');
            
        </script>
        </div>
    </div>
</body>
</html>