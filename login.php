<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <title>Login Panel</title>
    <style>
        /* POPPINS FONT */
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap');
        *{
            font-family: 'Poppins', sans-serif;
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        body, html {
            height: 100%;
            width: 100%;
            overflow: hidden; 
        }
        .video-bg {
            position: fixed;
            top: 0;
            left: 0;
            height: 100%;
            width: 100%;
            object-fit: cover;
            z-index: -9999; 
        }
        .box{
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
        }
        .container{
            width: 350px;
            display: flex;
            height: 500px;
            flex-direction: column;
            padding: 0 15px 0 15px;
            border: 2px solid #fff; 
            border-radius: 15px; 
            background-color: rgba(0, 0, 0, 0.5); 
        }
        span{
            color: #fff;
            font-size: small;
            display: flex;
            justify-content: center;
            padding: 10px 0 10px 0;
        }
        header{
            color: #fff;
            font-size: 30px;
            display: flex;
            justify-content: center;
            padding: 10px 0 10px 0;
        }
        .input-field{
            display: flex;
            flex-direction: column;
            margin-top:50px;
        }
        .username{
            display: flex;
            flex-direction: column;
            margin-top:50px;
            margin-left:30px;
        }
        .password{
            display: flex;
            flex-direction: column;
            margin-top:25px;
            margin-left:30px;
        }
        .input-field .input{
            height: 45px;
            width: 87%;
            border: none;
            outline: none;
            border-radius: 30px;
            color: #fff;
            padding: 0 0 0 42px;
            background: rgba(255,255,255,0.1);
        }
        .username .input{
            height: 45px;
            width: 87%;
            border: none;
            outline: none;
            border-radius: 30px;
            color: #fff;
            padding: 0 0 0 42px;
            background: rgba(255,255,255,0.1);
        }
        .password .input{
            height: 45px;
            width: 87%;
            border: none;
            outline: none;
            border-radius: 30px;
            color: #fff;
            padding: 0 0 0 42px;
            background: rgba(255,255,255,0.1);
        }
        i{
            position: relative;
            top: -31px;
            left: 17px;
            color: #fff;
        }
        ::-webkit-input-placeholder{
            color: #fff;
        }
        .submit{
            border: none;
            border-radius: 30px;
            font-size: 15px;
            height: 45px;
            outline: none;
            width: 100%;
            background: rgba(255, 255, 255, 0.7);
            cursor: pointer;
            transition: .3s;
        }
        .submit:hover{
            box-shadow: 1px 5px 7px 1px rgba(0, 0, 0, 0.2);
        }
        .bottom{
            display: flex;
            flex-direction: row;
            justify-content: space-between;
            font-size: small;
            color: #fff;
            margin-top: 10px;
        }
        .left{
            display: flex;
        }
        label a{
            color: #fff;
            text-decoration: none;
        }
        .error {
            color: red;
            text-align: center;
            margin-top: 10px;
        }
    </style>
</head>
<body>
    <!-- Video background -->
    <video autoplay muted loop class="video-bg">
        <source src="assets/img/login-form.mp4" type="video/mp4">
        Your browser does not support HTML5 video.
    </video>

    <div class="box">
        <div class="container">
            <div class="top-header">
                <span>Have an account?</span>
                <header>Login</header>
            </div>
            <form action="check.php" method="POST">
                <div class="username">
                    <input type="text" class="input" name="username" placeholder="Username" required>
                    <i class="bx bx-user"></i>
                </div>
                <div class="password">
                    <input type="password" class="input" name="password" placeholder="Password" required>
                    <i class="bx bx-lock-alt"></i>
                </div>
                <div class="input-field">
                    <input type="submit" class="submit" value="Login">
                </div>

                <div class="bottom">
                    <div class="left">
                        <input type="checkbox" id="check">
                        <label for="check"> Remember Me</label>
                    </div>
                    <div class="right">
                        <label><a href="#">Forgot password?</a></label>
                    </div>
                </div>

                <?php if (isset($_GET['error'])): ?>
                    <p class="error">Username atau password salah</p>
                <?php endif; ?>
            </form>
        </div>
    </div>
</body>
</html>
