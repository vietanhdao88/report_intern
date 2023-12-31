<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link rel="stylesheet" href="./asset/css/signin_signup.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600;700&display=swap" rel="stylesheet">
</head>
<body>
     <!-- header -->
    
     <header>
        <div class="header">
            <!-- logo -->
            <a href="#"><img src="./asset/images/logo.png" alt="Logo img"></a>
        </div>  
    </header>
    <hr>
    <!-- body -->
    <div >
        <div id="error" class="error"></div>
        <div class="header"><img src="./asset/images/STATUS_logo_black.3c28c69a.svg" alt="status-logo"></div>
        <div class="header">
           <strong>
            ONE ACCOUNT.
            <br>
            MORE ACCESS.
           </strong>
            <br>
            <img src="./asset/images/JD_FNL_Brand.2545ac22.svg" alt="JD fnl brand logo" width="97.5px" height="20px"></div>
            <div class="header"><h2 style="margin-top: 8px; font-weight: 900;font-size: 20px;">CREATE A STATUS ACCOUNT</h2></div>
        <div class="header">
            <strong>Earn 10 points every 1$ you spend</strong>
            <br>
            <span style="font-size: 16px;">Get points. Get access. Boots your status</span>
        </div>
        <div class="container-form">
            <form method="POST" autocomplete="off">
                <input type="text" class="f-signin" name="firstname" placeholder="First Name" required><br>
                <input type="text" class="f-signin" name="lastname" placeholder="Last Name" required><br> 
                <input type="date" class="f-signin" name="birthdate" placeholder="Birthday" value=""><br>
                <input type="email" class="f-signin" name="email" placeholder="Email" required><br> 
                <input type="password" class="f-signin" name="password" placeholder="Password" required><br>
                <!-- <label for="ai-check">
                    <div class="flex">
                    <input type="checkbox">       
                    </div> 
                    <div>Tôi không phải người máy</div>
                    <div class="mt1"> 
                        <img src="asset/images/reCap.jpg" alt=""><br>
                        <div class="reCAP">reCAPTA</div>
                        <div>
                            <div></div>
                            <div></div>
                        </div>
                    </div>
                </label><br> -->
                <button type="submit" class="signin-btn" name="txtsub">Register</button>
            </form>
            <?php
             include ('control.php');
             $get_data = new data();
             if(isset($_POST['txtsub'])){
                $insert = $get_data -> insert($_POST['firstname'], $_POST['lastname'] , $_POST['birthdate'] , $_POST['email'] , $_POST['password']);
                $_SESSION['name'] = $_POST['lastname'];
                if($insert){
                    echo "<script>alert('Đăng kí thành công mời bạn về trang đăng nhập')
                    window.location ='login.php'</script>";
                }else{
                    echo "dang ki khong thanh cong";
                }
             }
            ?>
        </div>
        <div class="morong">
            <span >
                By creating an account, you agree to our
                <a href="#" class="link">STATUS Terms & <br> Conditions</a>,
                <a href="#" class="link">Privacy Policy</a>,
                and
                <a href="#" class="link">Terms of Use</a>.
            </span>
        </div>
        <hr>
        <div class="conainer-footer">
            <p style="font-size: 16px;">Sign up for STATUS in a stores</p>
            <a href="">
                <button class="signup">COMPLETE YOUR REGISTRATION</button>
            </a>
            <p style="font-size: 16px;">Already have a STATUS account</p>
            <a href="login.php">
                <button class="signup">SIGN IN</button>
            </a>
        </div>
    </div>
</body>
</html>