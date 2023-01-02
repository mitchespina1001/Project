<?php require_once "controllerUserData.php"; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Signup Form</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="style1.css">
</head>
<body>
    <div class="hehe">
            <p>HAHAHAHA</p>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-4 offset-md-4 form">
                <form action="signup-user.php" method="POST" autocomplete="">
                    <h2 class="text-center1">Create Account</h2>
                    <br>
                    <?php
                    if(count($errors) == 1){
                        ?>
                        <div class="alert alert-danger text-center">
                            <?php
                            foreach($errors as $showerror){
                                echo $showerror;
                            }
                            ?>
                        </div>
                        <?php
                    }elseif(count($errors) > 1){
                        ?>
                        <div class="alert alert-danger">
                            <?php
                            foreach($errors as $showerror){
                                ?>
                                <li><?php echo $showerror; ?></li>
                                <?php
                            }
                            ?>
                        </div>
                        <?php
                    }
                    ?>
                    <div class="hello1">
                        <i class='bx bxs-user' ></i>
                        <input class="form-control" type="text" name="name" placeholder="Full Name" required value="<?php echo $name ?>">
                    </div>
                    <div class="hello2">
                        <i class='bx bxs-phone'></i>
                        <input class="form-control" type="text" name="num" placeholder="Contact Number" required>
                    </div>
                    <div class="hello3">
                        <i class='bx bxs-home'></i>
                        <input class="form-control" type="text" name="add" placeholder="Address" required>
                    </div>
                    <div class="hello4">
                        <i class='bx bxs-envelope'></i>
                        <input class="form-control" type="email" name="email" placeholder="Email Address" required value="<?php echo $email ?>">
                    </div>

                    <div class="hello5">
                        <i class='bx bxs-user-circle'></i>
                        <input class="form-control" type="text" name="username" placeholder="Username" required>
                    </div>

                    <div class="hello6">
                        <i class='bx bxs-lock-alt'></i>
                        <input class="form-control" type="password" name="password" placeholder="Password" required>
                    </div>
                    <div class="hello7">
                        <i class='bx bxs-lock-alt'></i>
                        <input class="form-control" type="password" name="cpassword" placeholder="Confirm password" required>
                    </div>
                    <div class="hello8">
                        <input class="button" type="submit" name="signup" value="Signup">
                    </div>
                    <div class="link login-link text-center" style="color: white;">Already a member? <a href="login-user.php" class="log">Login here</a></div>
                </form>
            </div>
        </div>
    </div>
    
</body>
</html>