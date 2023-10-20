<?php
 session_start();

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-compatible " content="ID=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./asset/css/signin_signup.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600;700&display=swap" rel="stylesheet">
</head>
<body>
    <script src="./js/sign_in.js"></script>
    <!-- header -->
    
    <header class="header">
        <div >
            <!-- logo -->
            <a href="#"><img src="./asset/images/logo.png" alt="Logo img"></a>
        </div>
    </header>
    <!-- body -->
    <hr>
    <main class="container">
        <h3 >SIGN IN</h3>
        <div class="container-form">
            <form action="" method="POST">
                <input class="f-signin" type="text" placeholder="Username" name="email" required><br>
                <input class="f-signin" type="password" placeholder="Password" name="password" required><br>
                <div>
                <p>This site is protected by reCAPTCHA and the Google <br>
                <a href="#" class="policy-term">Privacy Policy</a> and <a href="#" class="policy-term">Terms of Service</a> apply</p>
                <a href="#" class="forgot-pass">Forgot your password?</a>
            </div>
            <button type="submit" class="signin-btn" name="txtsub">SIGN IN </button>
            </form>
           
        </div>
        <?php
    include ("control.php");
    $get_data = new data();
    if(isset($_POST['txtsub'])){
        $role = $get_data -> login($_POST['email'] , $_POST['password']);
       $_SESSION['role'] = $role;
    //    $_SESSION['user'] = $_POST['name'];
       if($role == 1){
        echo "<script>alert('Đăng nhập thành công')
                    window.location ='../controller/index.php'</script>";
       }else if($role == 0){
        echo "<script>alert('Đăng nhập thành công')
        window.location ='index.php'</script>";
       }else{
        echo 'ten dang nhap hoac tai khoan khong dung';
       }
    }
    ?>
    </main>
        <hr>
        <!-- footer -->
        <div class="conainer-footer">
            <img src="./asset/images/STATUS_logo_black.3c28c69a.svg" alt="status-logo">
            <h3>JOIN NOW</h3>
            <div>
            <p ><span>Earn 10 points for every $1 you spend. <br></span>
               Get Points. Gain Access. Boost your STATUS.</p>
            <p>   Create an account to earn STATUS <br>
                points and check out faster.</p>
            </div>
            <a href="#" class="forgot-pass">Learn More</a>  
            <br> 
            <a href="signup.php">
                <button class="signup" >CREATE ACCOUNT</button>
            </a>
        </div>
    
  
</body>
</html>
