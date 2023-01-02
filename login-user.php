<?php require_once "controllerUserData.php"; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login Form</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="side">
            <p>HAHAHAHA</p>
    </div>
    <div class="container">
            <div class="col-md-4 offset-md-4 form login-form">
                <form action="login-user.php" method="POST" autocomplete="">
                    <h2 class="text-left1" style="color: white;">Welcome!</h2>
                    <br>
                    <?php
                    if(count($errors) > 0){
                        ?>
                        <div class="alert alert-danger text-center">
                            <?php
                            foreach($errors as $showerror){
                                echo $showerror;
                            }
                            ?>
                        </div>
                        <?php
                    }
                    ?>
                    <div class="form-group1">
                        <i class="bx bxs-user"></i>
                            <input class="form-control" type="text" name="username" placeholder="Username:" required><br>
                    </div>
                    <div class="form-group2">
                        <i class="bx bx-lock-alt"></i>
                        <input class="form-control" type="password" name="password" placeholder="Password:" required value="<?php echo $email ?>"><br>
                    </div>
                    <div class="link forget-pass text-left"><a href="forgot-password.php" class="le">Forgot password?</a></div>
                    <div class="form-group">
                        <input class="form-control button" type="submit" name="login" value="Login">
                    </div>
                    <div class="link login-link text-center">Not yet a member? <a href="signup-user.php" class="la">Signup now</a></div>
                    <div class="terms"><a href="termsconditions.html">Terms and Conditions</a></div>
                </form>
            </div>
        </div>
    </div>
    
</body>
</html>