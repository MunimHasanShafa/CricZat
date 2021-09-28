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
            <img src="logos/footer.png" alt="">
        </div>

        <div class="login-section">
            <div id='login-form'class='login-page'>
                <div class="form-box">
                    <div class='button-box'>
                        <div id='btn'></div>
                        <button type='button'onclick='login()'class='toggle-btn' id="login-btn">Log In</button>
                        <button type='button'onclick='register()'class='toggle-btn' id="reg-btn">Register</button>
                    </div>
                    
                <form action="" method="post" id='login' class='input-group-login'>
                    <input type='text'class='input-field'placeholder='Email Id' required >
                    <input type='password'class='input-field'placeholder='Enter Password' required>
                    <button type='submit'class='submit-btn'>Log in</button>
                </form>
             
                <form action="registration.php" method="post">
                    <div  id='register' class='input-group-register'>
                        <input type='text' name='firstName' class='input-field' placeholder='First Name' required>
                        <input type='text' name='lastName' class='input-field' placeholder='Last Name ' required>
                        <input type='email' name='email' class='input-field' placeholder='Email Id' required>
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
            // window.onclick = function(event) 
            // {
            //     if (event.target == modal) 
            //     {
            //         modal.style.display = "none";
            //     }
            // }
        </script>
        </div>
    </div>
</body>
</html>